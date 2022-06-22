<?php
require_once('BlogEntryPage.php');

$html->add(new BlogEntryPage(
  null,

  new BS_Paragraph(
    null,
    'Jesus is the Messiah prophesied in the Old Testament. The New Testament often states that He fulfilled one of those prophesies, but doesn’t always say that or where it was prophesied. Check out a list of many of those Old Testament Messianic prophecies and their New Testament fulfillment:',
  ),

  new BS_Row(
    ['className' => 'bg-secondary'],

    new BS_Col(
      ['md' => 3],
      new BS_Heading2(['className' => 'h4 my-2'], 'Prophecy')
    ),
    new BS_Col(
      ['md' => 3],
      new BS_Heading2(
        ['className' => 'h4 my-2'],
        new BS_Abbreviation(
          [
            'popover' => [
              'title' => 'Old Testament',
              'content' => 'The Old Testament was written before the time of Jesus Christ the Messiah and contained many prophecies about Him'
            ]
          ],
          'OT'
        ),
        ' References'
      )
    ),
    new BS_Col(
      ['md' => 6],
      new BS_Heading2(
        ['className' => 'h4 my-2'],
        new BS_Abbreviation(
          [
            'popover' => [
              'title' => 'New Testament',
              'content' => 'The New Testament was written after the death and resurrection of Jesus Christ the Messiah and showed how He fulfilled the prophecies about Him'
            ]
          ],
          'OT'
        ),
        ' Fulfillment'
      )
    ),
  ),

  implode('', array_map(
    function ($item) {
      return new BS_Row(
        ['className' => 'border-bottom'],

        new BS_Col(['md' => 3], $item[0]),
        new BS_Col(['md' => 3], $item[1]),
        new BS_Col(['md' => 6], $item[2]),
      );
    },

    [
      ['A heavenly High Priest', '[bible to="Zechariah 6:12–13" /]', '[bible to="Hebrews 4:4" /]; [bible to="Hebrews 8:1–2"]8:1–2[/bible]'],
      ['A holy priesthood', '[bible to="Zechariah 3:8" /]', '[bible to="John 2:19–21" /]; [bible to="Ephesians 2:20–21" /]; [bible to="1 Peter 2:5" /]'],
      ['A light to the Gentiles', '[bible to="Isaiah 49:6–12" /]', '[bible to="Acts 13:47" /]; [bible to="2 Corinthians 6:2" /]'],
      ['A new Covenant', '[bible to="Jeremiah 31:31–34" /]', '[bible to="Matthew 26:27–29" /]; [bible to="Mark 14:22–24" /]; [bible to="Luke 22:15–20" /]; [bible to="1 Corinthians 11:25" /]; [bible to="Hebrews 8:8–12" /]; [bible to="Hebrews 10:15–17"]10:15–17[/bible]; [bible to="Hebrews 12:24"]12:24[/bible]; [bible to="Hebrews 13:20"]13:20[/bible]'],
      ['A priest like Melchizedek', '[bible to="Psalm 110:1–7" /]', '[bible to="Matthew 22:41–45" /]; [bible to="Matthew 26:64"]26:64[/bible]; [bible to="Mark 12:35–37" /]; [bible to="Mark 16:19"]16:19[/bible]; [bible to="Acts 7:56" /]; [bible to="Ephesians 1:20" /]; [bible to="Colossians 1:20" /]; [bible to="Hebrews 1:13" /]; [bible to="Hebrews 2:8"]2:8[/bible]; [bible to="Hebrews 5:6"]5:6[/bible]; [bible to="Hebrews 6:20"]6:20[/bible]; [bible to="Hebrews 7:21"]7:21[/bible]; [bible to="Hebrews 8:1"]8:1[/bible]; [bible to="Hebrews 10:11–13"]10:11–13[/bible]; [bible to="Hebrews 12:2"]12:2[/bible]'],
      ['A promised Redeemer', '[bible to="Job 19:25–27" /]', '[bible to="John 5:28–29" /]; [bible to="Galatians 4:4" /]; [bible to="Ephesians 1:7, 11, 14" /]'],
      ['A rock of offense', '[bible to="Isaiah 8:14–15" /]', '[bible to="Romans 9:33" /]; [bible to="1 Peter 2:8" /]'],
      ['A spiritual house', '[bible to="Jeremiah 33:15–17" /]', '[bible to="John 2:19–21" /]; [bible to="Ephesians 2:20–21" /]; [bible to="1 Peter 2:5" /]'],
      ['A star out of Jacob', '[bible to="Numbers 24:17–19" /]', '[bible to="Matthew 2:2" /]; [bible to="Luke 1:33, 78" /]; [bible to="Revelation 22:16" /]'],
      ['A stone in Zion', '[bible to="Isaiah 28:16" /]', '[bible to="Romans 9:33" /]; [bible to="1 Peter 2:6" /]'],
      ['A tree planted by God', '[bible to="Ezekiel 17:22–24" /]', '[bible to="Matthew 13:31–32" /]'],
      ['A vesture dipped in blood', '[bible to="Isaiah 63:1–3" /]', '[bible to="Revelation 19:13" /]'],
      ['Accused by false witnesses', '[bible to="Psalm 27:12" /]', '[bible to="Matthew 26:60–61" /]'],
      ['Accused by false witnesses', '[bible to="Psalm 35:11" /]', '[bible to="Matthew 26:59–61" /]; [bible to="Mark 14:57–58" /]'],
      ['Afflicted with the afflicted', '[bible to="Isaiah 63:8–9" /]', '[bible to="Matthew 25:34–40" /]'],
      ['An everlasting dominion', '[bible to="Daniel 7:13–14" /]', '[bible to="Matthew 24:30" /]; [bible to="Matthew 25:31"]25:31[/bible]; [bible to="Matthew 26:64"]26:64[/bible]; [bible to="Mark 14:61–62" /]; [bible to="Acts 1:9–11" /]; [bible to="Revelation 1:7" /]'],
      ['Anointed to preach liberty', '[bible to="Isaiah 61:1–3" /]', '[bible to="Luke 4:17–19" /]; [bible to="Acts 10:38" /]'],
      ['Another to succeed Judas', '[bible to="Psalm 109:7–8" /]', '[bible to="Acts 1:16–20" /]'],
      ['As a prophet', '[bible to="Deuteronomy 18:15, 18–19" /]', '[bible to="John 6:14" /]; [bible to="John 7:40"]7:40[/bible]; [bible to="Acts 3:22–23" /]'],
      ['Betrayed by a friend', '[bible to="Psalm 41:9" /]; [bible to="Psalm 55:12–14"]55:12–14[/bible]', '[bible to="Matthew 26:14–16, 47, 50" /]; [bible to="Mark 14:17–21" /]; [bible to="Luke 22:19–23" /]; [bible to="John 13:18–19" /]'],
      ['Blessing through Abraham', '[bible to="Genesis 28:14" /]', '[bible to="Galatians 3:8, 16" /]; [bible to="Hebrews 6:14" /]'],
      ['Blessing to firstborn son', '[bible to="Exodus 13:2" /]', '[bible to="Luke 2:23" /]'],
      ['Blessing to Gentiles', '[bible to="Genesis 22:18, 26:4" /]', '[bible to="Galatians 3:8, 16" /]; [bible to="Hebrews 6:14" /]'],
      ['Blessing to nations', '[bible to="Genesis 18:18" /]', '[bible to="Galatians 3:8" /]'],
      ['Born a King', '[bible to="Jeremiah 30:9" /]', '[bible to="John 18:37" /]; [bible to="Revelation 1:5" /]'],
      ['Born in Bethlehem', '[bible to="Micah 5:1–5" /]', '[bible to="Matthew 2:1" /]; [bible to="Luke 2:4, 10–11" /]'],
      ['Born of a virgin', '[bible to="Isaiah 7:14" /]', '[bible to="Matthew 1:22–23" /]'],
      ['Buried with the rich', '[bible to="Isaiah 53:9" /]', '[bible to="Acts 10:43" /]; [bible to="Acts 13:38–39"]13:38–39[/bible]; [bible to="1 Corinthians 15:3" /]; [bible to="Ephesians 1:7" /]; [bible to="1 Peter 2:21–25" /]; [bible to="1 John 1:7, 9" /]'],
      ['Called by a new name', '[bible to="Isaiah 62:1–2" /]', '[bible to="Luke 2:32" /]; [bible to="Revelation 3:12" /]'],
      ['Calling of those not a people', '[bible to="Isaiah 55:4–5" /]', '[bible to="John 18:37" /]; [bible to="Romans 9:25–26" /]; [bible to="Revelation 1:5" /]'],
      ['Conceived by the Holy Spirit', '[bible to="Jeremiah 31:22" /]', '[bible to="Matthew 1:20" /]; [bible to="Luke 1:35" /]'],
      ['Crucified with transgressors', '[bible to="Isaiah 53:12" /]', '[bible to="John 12:37–38" /]; [bible to="Acts 8:28–35" /]'],
      ['Cursed on the tree', '[bible to="Deuteronomy 21:23" /]', '[bible to="Galatians 3:13" /]'],
      ['David’s seed to reign', '[bible to="Psalm 132:11" /]; [bible to="2 Samuel 7:12–13, 16, 25–26, 29" /]', '[bible to="Matthew 1:1" /]'],
      ['Death swallowed up in victory', '[bible to="Isaiah 25:6–12" /]', '[bible to="1 Corinthians 15:54" /]'],
      ['Declared to be the Son of God', '[bible to="Psalm 2:1–12" /]; [bible to="Proverbs 30:4" /]', '[bible to="Matthew 3:17" /]; [bible to="Mark 1:11" /]; [bible to="Mark 14:61–62"]14:61–62[/bible]; [bible to="Luke 1:35" /]; [bible to="John 3:13" /]; [bible to="John 9:35–38"]9:35–38[/bible]; [bible to="John 11:21"]11:21[/bible]; [bible to="Acts 4:25–26" /]; [bible to="Acts 13:33"]13:33[/bible]; [bible to="Romans 1:2–4" /]; [bible to="Romans 10:6–9"]10:6–9[/bible]; [bible to="Hebrews 1:5" /]; [bible to="Hebrews 5:5"]5:5[/bible]; [bible to="2 Peter 1:17" /]; [bible to="Revelation 2:26–27" /]; [bible to="Revelation 19:15–16"]19:15–16[/bible]'],
      ['Deliver out of Zion', '[bible to="Isaiah 59:16–20" /]', '[bible to="Romans 11:26–27" /]'],
      ['Earth filled with knowledge of the glory of the Lord', '[bible to="Habakkuk 2:14" /]', '[bible to="Romans 11:26" /]; [bible to="Revelation 21:23–26" /]'],
      ['Exhalted by God', '[bible to="Psalm 72:1–19" /]', '[bible to="Matthew 2:2" /]; [bible to="Philippians 2:9–11" /]; [bible to="Hebrews 1:8" /]'],
      ['Flight into Egypt', '[bible to="Hosea 11:1" /]', '[bible to="Matthew 2:15" /]'],
      ['Friends stand afar off', '[bible to="Psalm 38:11" /]', '[bible to="Matthew 27:55" /]; [bible to="Mark 15:40" /]; [bible to="Luke 23:49" /]'],
      ['Full of wisdom and power', '[bible to="Isaiah 11:1–10" /]', '[bible to="Matthew 3:16" /]; [bible to="John 3:34" /]; [bible to="Romans 15:12" /]; [bible to="Hebrews 1:9" /]'],
      ['Given gall and vinegar', '[bible to="Psalm 69:21" /]', '[bible to="Matthew 27:34, 48" /]; [bible to="Mark 15:23" /]; [bible to="Luke 23:36" /]; [bible to="John 19:29" /]'],
      ['God with us', '[bible to="Isaiah 9:6–7" /]', '[bible to="Matthew 1:21, 23" /]; [bible to="Luke 1:32–33" /]; [bible to="John 8:58" /]; [bible to="John 10:30"]10:30[/bible]; [bible to="John 14:19"]14:19[/bible]; [bible to="2 Corinthians 5:19" /]; [bible to="Colossians 2:9" /]'],
      ['Hands and feet pierced', '[bible to="Psalm 22:1–31" /]', '[bible to="Matthew 27:31, 35–36" /]'],
      ['Hated without reason', '[bible to="Psalm 35:19" /]; [bible to="Psalm 69:4"]69:4[/bible]', '[bible to="John 15:24–25" /]'],
      ['He commits His spirit', '[bible to="Psalm 31:5" /]', '[bible to="Luke 23:46" /]'],
      ['He speaks in parables', '[bible to="Psalm 78:2" /]', '[bible to="Matthew 13:34–35" /]'],
      ['Healing for the needy', '[bible to="Isaiah 35:4–10" /]', '[bible to="Matthew 9:30" /]; [bible to="Matthew 11:5"]11:5[/bible]; [bible to="Matthew 12:22"]12:22[/bible]; [bible to="Matthew 20:34"]20:34[/bible]; [bible to="Matthew 21:14"]21:14[/bible]; [bible to="Mark 7:30" /]; [bible to="John 5:9" /]'],
      ['Hearts are hardened', '[bible to="Isaiah 6:9–10" /]', '[bible to="Matthew 13:14–15" /]; [bible to="John 12:39–40" /]; [bible to="Acts 28:25–27" /]'],
      ['His ascention', '[bible to="Psalm 68:18" /]', '[bible to="Ephesians 4:8" /]'],
      ['His kindom triumphant', '[bible to="Daniel 2:44–45" /]', '[bible to="Luke 1:33" /]; [bible to="1 Corinthians 15:24" /]; [bible to="Revelation 11:15" /]'],
      ['His resurrection', '[bible to="Psalm 16:8–10" /]; [bible to="Psalm 49:15"]49:15[/bible]', '[bible to="Mark 16:6" /]; [bible to="Acts 2:27" /]; [bible to="Acts 13:35"]13:35[/bible]; [bible to="Acts 26:23"]26:23[/bible]'],
      ['“I come to do Thy will”', '[bible to="Psalm 40:6–8" /]', '[bible to="Hebrews 10:5–9" /]'],
      ['Israel regathered', '[bible to="Micah 2:12–13" /]', '[bible to="John 10:14, 26" /]'],
      ['Israel restored', '[bible to="Hosea 3:5" /]', '[bible to="John 18:37" /]; [bible to="Romans 11:25–27" /]'],
      ['Kindom for the saints', '[bible to="Daniel 7:27" /]', '[bible to="Luke 1:33" /]; [bible to="1 Corinthians 15:24" /]; [bible to="Revelation 11:15" /]'],
      ['King of kings, Lord of lords', '[bible to="Isaiah 32:1–4" /]', '[bible to="Revelation 19:16" /]; [bible to="Revelation 20:6"]20:6[/bible]'],
      ['Known for rightousness', '[bible to="Psalm 45:2, 6–7" /]', '[bible to="Hebrews 1:8–9" /]'],
      ['Light out of darkness', '[bible to="Isaiah 9:1–2" /]', '[bible to="Matthew 4:14–16" /]; [bible to="Luke 2:32" /]'],
      ['Make ready the way of the Lord', '[bible to="Isaiah 40:3–5" /]', '[bible to="Matthew 3:3" /]; [bible to="Mark 1:3" /]; [bible to="Luke 3:4–5" /]; [bible to="John 1:23" /]'],
      ['Massacre of infants', '[bible to="Jeremiah 31:15" /]', '[bible to="Matthew 2:17–18" /]'],
      ['Mocked and insulted', '[bible to="Psalm 22:7–8" /]', '[bible to="Matthew 27:39–43, 45–49" /]'],
      ['Money buys potter’s field', '[bible to="Zechariah 11:12–13" /]', '[bible to="Matthew 27:9" /]'],
      ['Nations walk in the light', '[bible to="Isaiah 60:1–3" /]', '[bible to="Luke 2:32" /]'],
      ['New heavens an a new earth', '[bible to="Isaiah 65:17–25" /]', '[bible to="2 Peter 3:13" /]; [bible to="Revelation 21:2" /]'],
      ['No bone broken', '[bible to="Exodus 12:46" /]; [bible to="Numbers 9:12" /]; [bible to="Psalm 34:20" /]', '[bible to="John 19:36" /]'],
      ['Of the tribe of Judah', '[bible to="Genesis 49:10" /]', '[bible to="Revelation 5:5" /]'],
      ['Our sins purged', '[bible to="Malachi 3:3" /]', '[bible to="Hebrews 1:3" /]'],
      ['Peg in a sure place', '[bible to="Isaiah 22:21–25" /]', '[bible to="Revelation 3:7" /]'],
      ['Piercing of His body', '[bible to="Zechariah 12:10" /]', '[bible to="John 19:34, 37" /]'],
      ['Prays for His enemies', '[bible to="Psalm 109:4" /]', '[bible to="Luke 23:34" /]'],
      ['Preceded by Forerunner', '[bible to="Malachi 3:1" /]', '[bible to="Matthew 11:20" /]; [bible to="Mark 1:2" /]; [bible to="Luke 7:27" /]'],
      ['Promise of the Spirit', '[bible to="Joel 2:28–32" /]', '[bible to="Acts 2:17–21" /]; [bible to="Romans 10:13" /]'],
      ['Reigning in mercy', '[bible to="Isaiah 16:4–5" /]', '[bible to="Luke 1:31–33" /]'],
      ['Rejected by His people', '[bible to="Isaiah 52:13–15, 53:1–12" /]', '[bible to="Matthew 8:7" /]; [bible to="Matthew 27:1–2, 12–14, 38"]27:1–2, 12–14, 38[/bible]'],
      ['Repentance for the nations', '[bible to="Isaiah 2:2–4" /]', '[bible to="Luke 24:47" /]'],
      ['Restoration of the tabernacle', '[bible to="Amos 9:11–12" /]', '[bible to="Acts 15:16–18" /]'],
      ['Scourged and spat upon', '[bible to="Isaiah 50:6" /]', '[bible to="Matthew 26:67" /]; [bible to="Matthew 27:26, 30"]27:26, 30[/bible]; [bible to="Mark 14:65" /]; [bible to="Mark 15:15, 19"]15:15, 19[/bible]; [bible to="Luke 22:63–65" /]; [bible to="John 19:1" /]'],
      ['Seed of Abraham', '[bible to="Genesis 12:3" /]', '[bible to="Matthew 1:1" /]; [bible to="Galatians 3:8, 16" /]'],
      ['Seed of David exalted', '[bible to="Psalm 89:3–4, 19, 27–29, 35–37" /]', '[bible to="Luke 1:32" /]; [bible to="Acts 2:30" /]; [bible to="Acts 13:23"]13:23[/bible]; [bible to="Romans 1:3" /]; [bible to="2 Timothy 2:8" /]'],
      ['Seed of Isaac', '[bible to="Genesis 17:19, 21:12" /]', '[bible to="Romans 9:7" /]; [bible to="Hebrews 11:18" /]'],
      ['Seed of the woman', '[bible to="Genesis 3:15" /]', '[bible to="Galatians 4:4" /]; [bible to="Hebrews 2:14" /]'],
      ['Serpent in wilderness', '[bible to="Numbers 21:8–9" /]', '[bible to="John 3:14–15" /]'],
      ['Shepherd smitten–sheep scattered', '[bible to="Zechariah 13:1, 6–7" /]', '[bible to="Matthew 26:31" /]; [bible to="John 16:32" /]'],
      ['Silent when accused', '[bible to="Isaiah 53:7" /]', '[bible to="John 1:29" /]; [bible to="John 11:49–52"]11:49–52[/bible]'],
      ['Sold for thirty pieces of silver', '[bible to="Zechariah 11:12–13" /]', '[bible to="Matthew 26:14–15" /]'],
      ['Soldiers cast lots for coat', '[bible to="Psalm 22:18" /]', '[bible to="Mark 15:20, 24–25, 34" /]; [bible to="Luke 19:24" /]; [bible to="Luke 23:35"]23:35[/bible]; [bible to="John 19:15–18, 23–24, 34" /]; [bible to="Acts 2:23–24" /]'],
      ['Son of Man comes in glory', '[bible to="Psalm 102:16" /]', '[bible to="Luke 21:24, 27" /]; [bible to="Revelation 12:5–10" /]'],
      ['Son of the Highest', '[bible to="Isaiah 33:22" /]', '[bible to="Luke 1:32" /]; [bible to="1 Timothy 1:17" /]; [bible to="1 Timothy 6:15"]6:15[/bible]'],
      ['Stone cut without hands', '[bible to="Daniel 2:34–35" /]', '[bible to="Acts 4:10–12" /]'],
      ['Stung by reproaches', '[bible to="Psalm 69:9" /]', '[bible to="John 2:17" /]; [bible to="Romans 15:3" /]'],
      ['Suffered vicariously', '[bible to="Isaiah 53:4–5" /]', '[bible to="Mark 15:3–4, 27–28" /]; [bible to="Luke 23:1–25, 32–34" /]'],
      ['The chief cornerstone', '[bible to="Psalm 118:22–23" /]', '[bible to="Matthew 21:42" /]; [bible to="Mark 12:10–11" /]; [bible to="Luke 20:17" /]; [bible to="John 1:11" /]; [bible to="Acts 4:11" /]; [bible to="Ephesians 2:20" /]; [bible to="1 Peter 2:4" /]'],
      ['The coming of Elijah', '[bible to="Malachi 4:5–6" /]', '[bible to="Matthew 11:14" /]; [bible to="Matthew 17:10–12"]17:10–12[/bible]'],
      ['The deaf hear, the blind see', '[bible to="Isaiah 29:18–19" /]', '[bible to="Matthew 5:3" /]; [bible to="Matthew 11:5"]11:5[/bible]; [bible to="John 9:39" /]'],
      ['The elect shall inherit', '[bible to="Isaiah 65:9" /]', '[bible to="Romans 11:5, 7" /]; [bible to="Hebrews 7:14" /]; [bible to="Revelation 5:5" /]'],
      ['The good Shepherd', '[bible to="Ezekiel 34:23–24" /]', '[bible to="John 10:11" /]'],
      ['The humble exalted', '[bible to="Ezekiel 21:26–27" /]', '[bible to="Luke 1:52" /]'],
      ['The King comes in the name of the Lord', '[bible to="Psalm 118:26" /]', '[bible to="Matthew 21:9" /]; [bible to="Matthew 23:39"]23:39[/bible]; [bible to="Mark 11:9" /]; [bible to="Luke 13:35" /]; [bible to="Luke 19:38"]19:38[/bible]; [bible to="John 12:13" /]'],
      ['The King cometh', '[bible to="Isaiah 62:11" /]', '[bible to="Matthew 21:5" /]'],
      ['The kingdom established', '[bible to="Micah 4:1–8" /]', '[bible to="Luke 1:33" /]'],
      ['The Lamb on the throne', '[bible to="Zechariah 2:10–13" /]', '[bible to="Revelation 5:13" /]; [bible to="Revelation 6:9"]6:9[/bible]; [bible to="Revelation 21:24"]21:24[/bible]; [bible to="Revelation 22:1–5"]22:1–5[/bible]'],
      ['The light of the world', '[bible to="Malachi 4:2–3" /]', '[bible to="Luke 1:78" /]; [bible to="John 1:9" /]; [bible to="John 12:48"]12:48[/bible]; [bible to="2 Peter 1:19" /]; [bible to="Revelation 2:28" /]; [bible to="Revelation 19:11–16"]19:11–16[/bible]; [bible to="Revelation 22:16"]22:16[/bible]'],
      ['The Lord our righteousness', '[bible to="Jeremiah 23:5–6" /]', '[bible to="John 2:19–21" /]; [bible to="Romans 1:3–4" /]; [bible to="Ephesians 2:20–21" /]; [bible to="1 Peter 2:5" /]'],
      ['The meek Servant', '[bible to="Isaiah 42:1–16" /]', '[bible to="Matthew 12:17–21" /]; [bible to="Luke 2:32" /]'],
      ['The shepherd dies for His sheep', '[bible to="Isaiah 40:10–11" /]', '[bible to="John 10:11" /]; [bible to="Hebrews 13:20" /]; [bible to="1 Peter 2:24–25" /]'],
      ['The sun darkened', '[bible to="Amos 8:9" /]', '[bible to="Matthew 24:29" /]; [bible to="Acts 2:20" /]; [bible to="Revelation 6:12" /]'],
      ['The throne of David established forever', '[bible to="1 Samuel 7:12–13, 16, 25–26" /]; [bible to="1 Chronicles 17:11–14, 23:27" /]; [bible to="2 Chronicles 21:7" /]', '[bible to="Matthew 19:28" /]; [bible to="Matthew 21:4"]21:4[/bible]; [bible to="Matthew 25:31"]25:31[/bible]; [bible to="Mark 12:37" /]; [bible to="Luke 1:32" /]; [bible to="John 7:4" /]; [bible to="Acts 2:30" /]; [bible to="Acts 13:23"]13:23[/bible]; [bible to="Romans 1:3" /]; [bible to="2 Timothy 2:8" /]; [bible to="Hebrews 1:5, 8" /]; [bible to="Hebrews 8:1"]8:1[/bible]; [bible to="Hebrews 12:2"]12:2[/bible]; [bible to="Revelation 22:1" /]'],
      ['“Thou remainest”', '[bible to="Psalm 102:24–27" /]', '[bible to="Hebrews 1:10–12" /]'],
      ['Through Noah’s sons', '[bible to="Genesis 9:27" /]', '[bible to="Luke 6:36" /]'],
      ['Time of His birth', '[bible to="Daniel 9:24–27" /]', '[bible to="Matthew 24:15–21" /]; [bible to="Luke 3:1" /]'],
      ['Triumphal entry', '[bible to="Zechariah 9:9–10" /]', '[bible to="Matthew 21:4–5" /]; [bible to="Mark 11:9–10" /]; [bible to="Luke 20:38" /]; [bible to="John 12:13–15" /]'],
    ]
  )),
));
