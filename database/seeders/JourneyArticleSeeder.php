<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JourneyArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'journey_id' => 1,
                'content' => 'Let"s kick off this experience by diving into  your first "Big Idea." <br>
                In this big idea we"re going to talk about what it means to listen to your heart and to listen to your life and how heart health is about so much more than just physical treatment.Play the video:<br>
                Video script lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis massa et libero suscipit dapibus. Aliquam facilisis ultricies mollis. Vestibulum pretium metus nec vulputate egestas. Vivamus fermentum sed nunc quis convallis. Proin porttitor vehicula urna sed tempus. 
                '
            ],
            [
                'journey_id' => 1,
                'content' => 'Great! By now you can tell Dr. Suzanne is pretty determined to motivate you to take action… when? Yes, you guessed it. Now!<br>
                Next, let"s revisit your results from your Adesso Whole Heart Assessment.<br>
                Your Adesso Whole Heart score is
                '
            ],
            [
                'journey_id' => 1,
                'content' => 'IMG'
            ],
            [
                'journey_id' => 1,
                'content' => 'Seeing your Heart Score probably stirred up some emotions. Your heart is beating for you every day but you only think about it if something feels off. So our Heart Score makes us connect directly to those precious, lovely heart beats. 
                <br>
                If your Heart Score was low, you were probably pretty happy. So you"ll be learning more about how to keep it that way.
                <br>
                But if your Heart Score was moderate or high, it might have caused your heart to feel like it skipped a beat! It can be scary.
                <br>
                But don"t worry, 80 percent of all heart disease is preventable and you"re here… you have your Now! And you"re doing the work to ensure your score goes down and your health and vitality goes up! 
                <br>
                So let"s take a deeper look at your score and the risk factors that need your attention. You want to think about how these factors impact your heart. You"ll also learn basic steps you can take right now.
                '
            ],
            [
                'journey_id' => 1,
                'content' => 'Let"s dive deeper into the idea of “listening to your heart.” Dr. Suzanne wants to share some thoughts. Push play below and feel free to read along.
                <br>
                Podcast script lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis massa et libero suscipit dapibus. Aliquam facilisis ultricies mollis. Vestibulum pretium metus nec vulputate egestas. Vivamus fermentum sed nunc quis convallis. Proin porttitor vehicula urna sed tempus. Quisque tempus, massa eu eleifend auctor, dui nibh tristique urna, ut suscipit 
                '
            ],
            [
                'journey_id' => 1,
                'content' => 'Take a moment to reflect on your heart journey and to listen to your heart.
                '
            ],
            [
                'journey_id' => 1,
                'content' => 'Remember at the beginning of this experience that you selected a goal?
                Here it is again:
                Commit to a heart-healthy life.
                Now you understand the Risk Factors that affect your heart. But the MyAdesso experience isn"t about stopping with knowing. That would be living from your head. We"re living from our hearts and that requires doing. This means taking action that changes our mindsets, habits, and behaviors.
                And we will prompt you every day to journal and record your lifestyle choices.
                In this first goal you can choose to track areas like sleep, weight, and alcohol consumption. 
                Go to the action page and log your first Heart Action. 
                Keep the momentum! Log your actions on your dashboard every day and keep moving through the sessions to add more goals and actions.
                '
            ]
        ];
        foreach( $contents as $index => $content ){
            DB::table('journey_articles')->insert([
                'journey_id'   => $content['journey_id'] ?? '',
                'content'     => $content['content'] ?? '',
                'position' => $index + 1
            ]);
        }
    }
}
