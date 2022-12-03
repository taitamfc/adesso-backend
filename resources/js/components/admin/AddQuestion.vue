<template>
    <loader v-if="loading" object="#ff9633" color1="#ffffff" color2="#17fd3d" size="5" speed="2" bg="#343a40" objectbg="#999793" opacity="80" name="circular"></loader>
    <b-container v-else class="bg-white py-3">
        <b-row>
            <b-col ref="type">
                <b-form-group
                    label="Question Type:"
                    label-for="input-question-type"
                >
                    <b-form-select
                        id="input-question-type"
                        v-model="question.type"
                        :options="questionTypes"
                        :disabled="data.id ? true : false"
                        :state="validation('type')"
                    ></b-form-select>
                    <b-form-invalid-feedback :state="validation('type')">
                        Please select question type!
                    </b-form-invalid-feedback>
                </b-form-group>
            </b-col>
        </b-row>
        <b-row>
            <b-col ref="name">
                <b-form-group
                    label="Question Name:"
                    label-for="input-name"
                >
                    <b-form-input
                        id="input-name"
                        v-model="question.name"
                        :state="validation('name')" 
                    ></b-form-input>
                    <b-form-invalid-feedback :state="validation('name')">
                        Please input question name!
                    </b-form-invalid-feedback>
                </b-form-group>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <b-form-group
                    label="Question Prompt:"
                    label-for="input-prompt"
                >
                    <b-form-input
                        id="input-prompt"
                        v-model="question.prompt"
                    ></b-form-input>
                </b-form-group>
            </b-col>
            <b-col ref="score">
                <b-form-group
                    label="Question Score:"
                    label-for="input-score"
                >
                    <b-form-input
                        id="input-score"
                        v-model="question.score"
                        :state="validation('score')" 
                    ></b-form-input>
                    <b-form-invalid-feedback :state="validation('score')">
                        Please input question score is number!
                    </b-form-invalid-feedback>
                </b-form-group>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <label>Main content: </label>
                <quill-editor
                    class="questions mb-4"
                    :options="editorOption"
                    v-model="question.main_content"
                />
            </b-col>
        </b-row>

        <b-row v-show="question.type" class="mt-3">
            <b-col>
                <b-alert class="mt-3" ref="error" :show="errMessage.length" variant="danger">{{errMessage}}</b-alert>
                <component :options="options" :fields="fields" :value="value" :correct="correct" :is="question.type" @update-question="updateDataQuestion" @updateCorrect="updateCorrect" @callBackUploadFile="callBackUploadFile"></component>
            </b-col>
        </b-row>

        <div class="mx-auto mt-3">
            <b-button
                :loading="loading"
                :color="yellow"
                v-if="!data.id"
                @click="addQuestion"
                tile
                block
                class="col-4 mx-auto"
            >
                Save Question
            </b-button>
            <b-button
                :loading="loading"
                :color="yellow"
                v-else
                @click="updateQuestion"
                tile
                block
                class="col-4 mx-auto"
            >
                Update Question
            </b-button>
        </div>
        <b-toast id="my-toast" variant="success" solid>
            <template #toast-title>
                <div class="d-flex flex-grow-1 align-items-baseline">
                <strong class="mr-auto">Success!</strong>
                </div>
            </template>
            Add question successfully!
        </b-toast>
    </b-container>
</template>

<script>
// import katex from "katex";
// import "katex/dist/katex.min.css";
import FillBlank from './FillBlank';
import MultipleChoice from './MultipleChoice';
import SingleChoice from './SingleChoice';
import TrueFalse from './TrueFalse';
import SelectImage from './SelectImage';
import _ from 'lodash';
import Table from './Table';

export default {
    name: "AddQuestion",
    props: {
        data: {
            type: Object,
            default: () => ({
                main_content: "",
                prompt: "",
                score: 1,
                type: "question_table",
                name: "",
                description: "",
                data_raw: {
                    options: [
                        {
                            content: "",
                            is_correct: false
                        }
                    ],
                }
            })
        },
    },
    components: {},
    data() {
        return {
            currentQuestion: null,
            correct: _.get(this.data, 'data_raw.correct', null),
            btnLoading: false,
            dialog: false,
            loading: false,
            isSubmitted: false,
            editorDisabled: true,
            editorOption: {
                modules: {
                    toolbar: [
                        ["bold", "italic", "underline", "strike"],
                        ["blockquote"],
                        [{ header: 1 }, { header: 2 }],
                        [{ list: "ordered" }, { list: "bullet" }],
                        [{ script: "sub" }, { script: "super" }],
                        [{ indent: "-1" }, { indent: "+1" }],
                        [{ align: [] }],
                        ["clean"],
                        ["link", "image", "video"],
                        ["formula"],
                    ],
                },
                placeholder: "Type text here",
                theme: "snow",
                readonly: true,
            },
            yellow: "#e67d23",
            black: "#343a40",
            questionTypes: [
                { value: null, text: "Please select an option" },
                { value: "single_choice", text: "Single Choice" },
                { value: "multiple_choice", text: "Multiple Choice" },
                { value: "fill_blank", text: "Fill Blank" },
                { value: "true_false", text: "True/False" },
                { value: "select_image", text: "Select Image" },
                { value: "question_table", text: "Table" },
            ],
            options: _.get(this.data, 'data_raw.options', []),
            fields: _.get(this.data, 'data_raw.fields', [{ key: '', label: "", type: 'text' }]),
            value: _.get(this.data, 'data_raw.value', []),
            question: {
                ...this.data,
                main_content: _.get(this.data, 'data_raw.main_content', ""),
            },
            errMessage: "",
            // question: {
            //     main_content: "",
            //     prompt: "",
            //     score: 1,
            //     type: "single_choice",
            //     name: "",
            //     description: "",
            // }
        };
    },
    methods: {
        // onEditorBlur(quill) {
        //     // this.editorDisabled = true
        // },
        updateCorrect(val) {
            this.correct = val;
        },
        onEditorFocus(quill) {
            this.editorDisabled = false;
        },
        deleteQuestion() {
            this.btnLoading = true;
            this.$http
                .post(`deleteQuestion/${this.currentQuestion.id}`)
                .then((res) => {
                    this.btnLoading = false;
                    this.dialog = false;
                    this.questions = this.questions.filter(
                        (question) => question.id !== this.currentQuestion.id
                    );
                    this.currentQuestion = null;
                })
                .catch((err) => {
                    this.btnLoading = false;
                    this.dialog = false;
                    console.log(err.response.data);
                    alert(
                        err.response.status == 403
                            ? err.response.data.message
                            : "There was an error deleting this question, please try again."
                    );
                })
                .finally(() => {
                    this.btnLoading = false;
                    this.isSubmitted = true;
                });
        },
        addQuestion() {
            this.isSubmitted = true;
            if (this.isDisable) {
                return;
            }
            this.loading = true;
            let { question, correct, options } = this;
            const data = {
                ...question,
                data_raw: {
                    ...question,
                    options,
                    correct
                },
            };
            this.$http
                .post("questions/store", data)
                .then((res) => {
                    this.isSubmitted = false;
                    // this.questions.push(res.data.question);
                    window.scrollTo(0, 0);
                    // this.question = null;
                    this.correct = null;
                    this.options = [
                        {
                            content: "",
                            is_correct: false
                        }
                    ];
                    this.question = {
                        main_content: "",
                        prompt: "",
                        score: 1,
                        type: "single_choice",
                        name: "",
                        description: "",
                    };
                    this.$bvToast.show('my-toast');
                    window.location.href = "/admin/questions";
                })
                .catch((err) => {
                    console.log(err.response.data);
                    alert(
                        err.response.status == 403
                            ? err.response.data.message
                            : "There was an error submitting this question, please try again."
                    );
                })
                .finally(() => {
                    this.loading = false;
                });
        },
        updateQuestion() {
            this.isSubmitted = true;
            if (this.isDisable) return;
            this.loading = true;
            let { question } = this;
            const {
                created_at,
                updated_at,
                data_raw,
                main_content,
                id,
                ...params
            } = question;
            let _params = {
                ...params,
                data_raw: {
                    ...data_raw,
                    correct: this.correct,
                    main_content,
                },
            };
            this.$http
                .post("questions/update/"+id, _params)
                .then((res) => {
                    this.loading = false;
                    this.isSubmitted = false;
                    window.scrollTo(0, 0);
                    this.makeToast(true, "Question updated successfully");
                })
                .catch((err) => {
                    this.loading = false;
                     this.isSubmitted = false;
                    console.log(err.response.data);
                    alert(
                        err.response.status == 403
                            ? err.response.data.message
                            : "There was an error submitting this question, please try again."
                    );
                });
        },
        formatDate(dateString) {
            const options = { year: "numeric", month: "long", day: "numeric" };
            return new Date(dateString).toLocaleDateString(undefined, options);
        },
        validation(fieldName) {
            if (!this.isSubmitted) return null;
            return this.validate(fieldName);
        },
        validate(fieldName) {
            if (fieldName == "score") {
                let _score = Number(this.question.score);
                if(isNaN(this.question.score) || this.question.score == '') return false;
                if (_score >= 0) return true;
                return false;
            }
            return !!this.question[fieldName].length
        },
        makeToast(append = false, title = 'Success') {
            this.$bvToast.toast(`Succes!`, {
                title: title,
                autoHideDelay: 8000,
                appendToast: append,
                variant: 'success',
            })
        },
        goto(refName) {
            var element = this.$refs[refName];
            var top = element.offsetTop;
            window.scrollTo(0, top);
        },
        callBackUploadFile(file, id) {
            this.options[id].content = {
                ...this.options[id].content,
                image: file.path,
            }
        },
        updateDataQuestion(data) {
            this.question = {
                ...this.question,
                ...data,
            }
        }
    },
    watch: {
        'question.type'(newVal, oldVal) {
            if (newVal != oldVal) {
                this.isSubmitted = false;
                this.correct = null;
                this.options =  [
                            {
                                content: "",
                                is_correct: false
                            }
                        ],
                this.question = {
                    ...this.data,
                    type: newVal,
                    main_content: _.get(this.data, 'data_raw.main_content', ""),
                };
            }
        },
        options(newVal, oldVal) {
            this.errMessage = "";
        },
    },
    mounted() {
        // window.katex = katex;
    },
    computed: {
        isDisable() {
            this.errMessage = "";
            let _disabled = ['type', 'name', 'score', 'options' ].some((key) => {
                if (key == 'options') {
                    let _type = this.question.type;
                    if (_type == 'true_false' || _type == 'fill_blank') {
                        if (this.correct == null) {
                            this.errMessage = "Please select one correct answer";
                            this.goto('error');
                            return true;
                        }
                    } else if (_type == 'select_image') {
                        let _invalid = this.options.some((option) => option.content.image == '');
                        let _countCorrect = this.options.filter((option) => option.is_correct).length;
                        if (_invalid || _countCorrect != 1) {
                            this.errMessage = "Please fill all answer options and select one correct answer";
                            this.goto('error');
                            return true;
                        }
                    } else if (_type == 'single_choice') {
                        let _invalid = this.options.some((option) => option.content == '');
                        let _countCorrect = this.options.filter((option) => option.is_correct).length;
                        if (_invalid || _countCorrect != 1) {
                            this.errMessage = "Please fill all answer options and select one correct answer";
                            this.goto('error');
                            return true;
                        }
                    } else if (_type == 'multiple_choice') {
                        let _invalid = this.options.some((option) => option.content == '');
                        let _countCorrect = this.options.filter((option) => option.is_correct).length;
                        if (_invalid || _countCorrect <= 1) {
                            this.errMessage = "Please fill all answer options and select at least two correct answers";
                            this.goto('error');
                            return true;
                        }
                    }
                }else if (!this.validate(key)) {
                    this.goto(key);
                    return true;
                }
            });
            return this.loading || _disabled;
        },
    },
    components: {
        'fill_blank': FillBlank,
        'multiple_choice': MultipleChoice,
        'single_choice': SingleChoice,
        'true_false': TrueFalse,
        'select_image': SelectImage,
        'question_table': Table
    }
};
</script>

<style scoped>

.questions {
    height: 120px;
}

.active {
    background-color: #343a40;
    color: #e67d23;
    border: solid #343a40 1px;
}

.btn-secondary {
    background-color: #e67d23;
    border: solid #e67d23 1px;
}

.yellow {
    background-color: #e67d23;
}
</style>
