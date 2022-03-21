<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'I don’t know how many of you watched it, but there was a 2.5 hour debate between Ken Ham (president of Answers in Genesis and the Creation Museum) and Bill Nye (“The Science Guy” and CEO of the Planetary Society) this past week on Young Earth Creationism vs. Evolution. Both sides made good points and presented their cases well, but in the end, most people will leave believing what they went in believing. This is not to say that all debates are fruitless, however, as they can often spur people to reassess certain aspects about what they believe to be true, regardless of which side presented the point. And, contrary to popular belief, our faith permits us to know why we believe what we believe and not always “blindly follow what we’ve been told.”',
  ),

  new BS_Paragraph(
    null,
    'The most interesting thing about the debate to me was that, even though it was a debate about the origins of the universe as we know it, several times Bill basically admitted that his major problem with Creationism is, “what about those who never heard…what happens to them?” While this is a common question, even among Christians, it has little to do with the science behind how we got here. And yet, you could tell the question plagued him. Perhaps Ken didn’t want to get off-topic or caught in a non-science theological debate with Bill (who obviously an admittedly isn’t well versed in theology), but he never answered him.',
  ),

  new BS_Paragraph(
    null,
    'From here you could also sense Bill’s pride in human knowledge and effort and a defiant hostility toward the authority of a “higher power.” Ironically, the next morning I read the following passage from the book of Psalms.',
  ),

  new BS_BiblePassage([
    'passage' => 'Psalm 2:2–4',
    'version' => 'NLT'
  ]),

  new BS_Paragraph(
    null,
    'Another interesting thing about the debate to me was that Bill kept trying to play the numbers game. He repeatedly said in some form or another that, “all the REAL scientists believe this and you and your few followers who aren’t REALLY scientists believe this other thing…” Besides utilizing this phrasing in an attempt discredit non-evolutionists en masse, he was also saying that, “most people are smart and most people believe this, so this must be true.” This statement instantly reminded me of a certain passage from Romans, which also serves as an over-all theme of the debate.',
  ),

  new BS_BiblePassage([
    'passage' => 'Romans 3:4',
    'version' => 'NASB'
  ]),

  new BS_Paragraph(
    null,
    'When asked how the universe got here in the first place and why are we here, all Bill could say is, “I don’t know…that is the great question of the universe we are seeking an answer for.” Somewhat comically, yet profoundly, Ken responded, “Well, Bill, there IS a Book…” As believers we are not “ruled by an old book” as many have accused, but by a living, holy, and powerful God, Creator of the universe, worthy of all praise! This One and Only True God made sure we had a divinely-inspired Book that we can all reference when someone claims to have heard something from Him or that they have “some new wisdom” on how something happened or will happen.',
  ),
));
