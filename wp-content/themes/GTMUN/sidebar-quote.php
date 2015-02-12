	<div id="quote" class="divider" role="complementary">

		<div class="hero-text">

			<?php 

			$quotes = array (
			    "1" => array("author" => "Jimi Hendrix", "quote" => "When the power of love overcomes the love of power the world will finally know peace."),
			    "2" => array("author" => "Harry S. Truman", "quote" => "The United Nations is designed to make possible lasting freedom and independence for all its members."),
			    "3" => array("author" => "Eve Curie", "quote" => "We discovered that peace at any price is no peace at all."),
			    "4" => array("author" => "Moshe Dayan", "quote" => "If you want to make peace, you don't talk to your friends. You talk to your enemies."),
			    "5" => array("author" => "Albert Einstein", "quote" => "Peace cannot be kept by force. It can only be achieved by understanding."),
			    "6" => array("author" => "Pope John XXIII", "quote" => "The true and solid peace of nations consists not in equality of arms, but in mutual trust alone."),
			    "7" => array("author" => "Jeannette Rankin", "quote" => "You can no more win a war than you can win an earthquake."),
			    "8" => array("author" => "Jane Addams", "quote" => "The good we secure for ourselves is precarious and uncertain until it is secured for all of us and incorporated into our common life."),
			    "9" => array("author" => "Agatha Christie", "quote" => "One is left with the horrible feeling now that war settles nothing; that to win a war is as disastrous as to lose one."),
			    "7" => array("author" => "Kofi Annan", "quote" => "From this vision of the role of the United Nations in the next century flow three key priorities for the future: eradicating poverty, preventing conflict and promoting democracy."),
			    "8" => array("author" => "Kofi A. Annan", "quote" => "It has been said that arguing against globalization is like arguing against the laws of gravity."),
			    "9" => array("author" => "Carlos Santana", "quote" => "Peace has never come from dropping bombs. Real peace comes from enlightenment and educating people to behave more in a divine manner."),
			    "10" => array("author" => "Dwight Eisenhower", "quote" => "One of these days, the people are going to demand peace of the government, and the government is going to have to give it to them."),
			    "11" => array("author" => "Albert Einstein", "quote" => "I know not with what weapons World War III will be fought, but World War IV will be fought with sticks and stones."),
			    "12" => array("author" => "Ralph Bunche", "quote" => "The United Nations is our one great hope for a peaceful and free world."),
			    "13" => array("author" => "Franklin D. Roosevelt", "quote" => "More than an end to war, we want an end to the beginnings of all wars."),
			    "14" => array("author" => "Dag Hammarskjold", "quote" => "Everything will be all right - you know when? When people, just people, stop thinking of the United Nations as a weird Picasso abstraction and see it as a drawing they made themselves."),
			    "15" => array("author" => "Dean Acheson", "quote" => "We have actively sought and are actively seeking to make the United Nations an effective instrument of international cooperation."),
			    "16"   => array("author" => "Adlai E. Stevenson", "quote" => "The whole basis of the United Nations is the right of all nations - great or small - to have weight, to have a vote, to be attended to, to be a part of the twentieth century."),
			    "17"   => array("author" => "Kofi A. Annan", "quote" => "We may have different religions, different languages, different colored skin, but we all belong to one human race."),
			    "18"   => array("author" => "David Friedman", "quote" => "The direct use of force is such a poor solution to any problem, it is generally employed only by small children and large nations."),
			    "19"   => array("author" => "Henry Miller", "quote" => "If there is to be any peace it will come through being, not having."),
			    "20"   => array("author" => "Thomason", "quote" => "Peace is the happy, natural state of man; war corruption, his disgrace."),
			    "21"   => array("author" => "Jane Addams", "quote" => "Nothing could be worse than the fear that one had given up too soon, and left one unexpended effort that might have saved the world."),
			    "22"   => array("author" => "Judith Butler", "quote" => "Peace is a resistance to the terrible satisfactions of war."),
			    "23"   => array("author" => "Kofi Annan", "quote" => "The United Nations, whose membership comprises almost all the states in the world, is founded on the principle of the equal worth of every human being."),
			    "24"   => array("author" => "Kofi Annan", "quote" => "We have the means and the capacity to deal with our problems, if only we can find the political will."),
			    "25"   => array("author" => "Winston Churchill", "quote" => "The finest combination in the world is power and mercy. The worst combination in the world is weakness and strife."),
			    "26"   => array("author" => "Albert Einstein, (attributed)", "quote" => "The significant problems we have cannot be solved at the same level of thinking with which we created them."),
			    "27"   => array("author" => "John F. Kennedy", "quote" => "The world is very different now. For man holds in his mortal hands the power to abolish all forms of human poverty, and all forms of human life."),
			    "28"   => array("author" => "Mahatma Gandhi", "quote" => "Victory attained by violence is tantamount to a defeat, for it is momentary."),
			    "29"   => array("author" => "Isaac Asimov", "quote" => "If knowledge can create problems, it is not through ignorance that we can solve them."),
			    "30"   => array("author" => "Kofi A. Annan", "quote" => "If the United Nations does not attempt to chart a course for the world's people in the first decades of the new millennium, who will?"),
			    "31"   => array("author" => "Lois McMaster Bujold", "quote" => "War is not its own end, except in some catastrophic slide into absolute damnation. It's peace that's wanted. Some better peace than the one you started with."),
			    "32"   => array("author" => "Alfred Unaterra", "quote" => "One world, one you, one today... why not discover each in each?"),
			    "33"   => array("author" => "From Unix User's Manual Manual, Supplementary Documents, p. 14-3", "quote" => "A general task, such as working for world peace, is something we can all do, but not something we can currently write programs to do."),
			    "34"   => array("author" => "John Lennon", "quote" => "If everyone demanded peace instead of another television set, then there'd be peace."),
			    "35"   => array("author" => "B. H. Liddell Hart", "quote" => "If you wish for peace, understand war."),
			    "36"   => array("author" => "Jimmy Carter", "quote" => "War may sometimes be a necessary evil. But no matter how necessary, it is always an evil, never a good. We will not learn how to live together in peace by killing each other's children."),
			    "37"   => array("author" => "Dalai Lama", "quote" => "Peace can only last where human rights are respected, and where individuals and nations are free."),
			    "38"   => array("author" => "Walter Goodman", "quote" => "The idea of all-out nuclear war is unsettling."),
			    "39"   => array("author" => "Ralph Waldo Emerson", "quote" => "Peace cannot be achieved through violence, it can only be attained through understanding."),
			    "40"   => array("author" => "Julius K. Nyerere", "quote" => "Violence is unnecessary and costly. Peace is the only way."),
			    "41"   => array("author" => "Anonymous", "quote" => "In the struggle rewards are few. In the fact, I know of only two, loving friends and living dreams. These rewards are not so few it seems.")
			);

			$chosenQuote = $quotes[array_rand($quotes)];

			echo "<h3 class='quote'>".$chosenQuote["quote"]."</h3><br><h4 class='author'>— ".$chosenQuote["author"]."</h3>";

			?>
			

		</div>
	</div >