<?php

use Illuminate\Database\Seeder;

class ProductTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
[
 "title" => "God of War",
 "publisher" => "Sony",
 "price" => 599,
 "description" => "God of War is a third-person action-adventure game developed by Santa Monica Studio and published by Sony Interactive Entertainment (SIE). Released on April 20, 2018, for the PlayStation 4 (PS4) console, it is the eighth installment in the God of War series, the eighth chronologically, and the sequel to 2010's God of War III. Unlike previous games, which were loosely based on Greek mythology, this game is loosely based on Norse mythology. The main protagonists are Kratos, the former Greek God of War, and his young son Atreus. Following the death of Kratos' second wife and Atreus' mother, they journey to fulfill her promise and spread her ashes at the highest peak of the nine realms. Kratos keeps his troubled past a secret from Atreus, who is unaware of his divine nature. Along their journey, they encounter monsters and gods of the Norse world.",
 "image" => "https://thespinoff.scdn5.secure.raxcdn.com/wp-content/uploads/2018/04/ps4-june-refresh-god-of-war-three-step-banner-01-us-17nov16.jpeg"
],
[
 "title" => "Monster Hunter World",
 "publisher" => "Capcom",
 "price" => 499,
 "description" => "Monster Hunter: World is an action role-playing game developed and published by Capcom. A part of the Monster Hunter series, it was released worldwide for PlayStation 4 and Xbox One in January 2018, with a Microsoft Windows version being scheduled later in the year. In the game, the player takes the role of a Hunter, tasked to hunt down and either kill or trap monsters that roam in one of several environmental spaces. If successful, the player is rewarded through loot consisting of parts from the monster and other elements that are used to craft weapons and armor, amongst other equipment. The game's core loop has the player crafting appropriate gear to be able to hunt down more difficult monsters, which in turn provide parts that lead to more powerful gear. Players may hunt alone, or can hunt in cooperative groups of up to four players via the game's online services.",
 "image" => "https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Finsertcoin%2Ffiles%2F2018%2F01%2Fmonster-hunter1.jpg"
],
[
 "title" => "Shadow of the Colossus",
 "publisher" => "Sony",
 "price" => 350,
 "description" => "The game's storyline focuses on a young man named Wander who enters a forbidden land. Wander must travel across a vast expanse on horseback and defeat sixteen massive beings, known simply as colossi,[4] in order to restore the life of a girl named Mono. The game is unusual within the action-adventure genre in that there are no towns or dungeons to explore, no characters with whom to interact, and no enemies to defeat other than the colossi. Shadow of the Colossus has been described as a puzzle game, as each colossus can only be killed by attacking certain weak points which require specific actions to access.",
 "image" => "https://nerdist.com/wp-content/uploads/2018/02/Shadow-of-the-Colossus-remake-1.jpg"
],
[
 "title" => "The Last Guardian",
 "publisher" => "Sony",
 "price" => 350,
 "description" => "The boy awakens in a ruined castle in a deep valley known as the Nest. He discovers an enormous, winged, cat-like creature he names Trico, chained and wounded. Though Trico is hostile, after the boy removes the spears from its body and feeds it, it begins to accept him. The boy unchains Trico and they explore the area, discovering a mirror-like shield that summons lightning like energy from Trico's tail. The pair make their way through the castle ruins, evading the ghostly soldiers, and Trico's broken horns and wings slowly regrow.",
 "image" => "https://twinfinite.net/wp-content/uploads/2016/06/the-last-guardian-2.jpg"
]
]);
    }
}
