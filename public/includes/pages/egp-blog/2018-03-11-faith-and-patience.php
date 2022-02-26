<?php
$html->add(new BS_BlogEntryPage(
  [ 'metadata' => $metadata ],

  new BS_Blockquote(
    null,

    new BS_Paragraph(
      null,
      '“God has ordained that it would take faith and patience to inherit His promises. Time will remove that which is not true and strengthen that which is true.'
    ),

    new BS_Paragraph(
      null,
      'The [sc]Lord[/sc] compared faith to a mustard seed. … But lest we misunderstand, the seed is not the fruit. The seed must be planted, watered, and cultivated to become a healthy plant—only then can it bear fruit. It is the same with faith. That which we interpret as faith is often just the seed planted within us, still needing to be watered and cultivated.',
    ),

    new BS_Paragraph(
      null,
      'True faith can move mountains, raise the dead, and heal the sick. … Although it is wonderful and exciting when the [sc]Lord[/sc] performs instantaneous miracles, those which take a little longer are no less miraculous. It amazed the disciples when Jesus turned the water into wine, but the [sc]Lord[/sc] turns water into wine every day—He usually just takes a little longer. … Neither has a sickness ever been cured except by His hand.',
    ),

    new BS_Paragraph(
      null,
      'True faith sees God’s hands in everything, regardless of the amount of time He takes or the manner in which He does His work. … True faith is seeing Him and abiding in Him.”'
    ),

    new BS_BlockquoteFooter(
      null,

      '—',
      new BS_Link(
        [ 'to' => 'https://www.amazon.com/There-Trees-Garden-Divine-Destiny/dp/1929371551/' ],

        'Rick Joyner, ',
        new BS_Citation(null, 'There Were Two Trees in the Garden'),
        ', chapter 7',
      ),
    ),
  )
));
