<?php
class BlogEntryPage extends BS_Container {
  function render() {
    global $db, $metadata;

    // retrieve previous/next entries
    $previous = $metadata->previous
      ? $db->document('blog', $metadata->previous)
      : null;
    $next = $metadata->next
      ? $db->document('blog', $metadata->next)
      : null;

    $this->properties['className'][] = 'py-section clearfix';

    $this->children = [
      new BS_Section(
        ['className' => 'clearfix'],

        $metadata->image
          ? new BS_Image([
            'url' => $metadata->image,
            'alt' => $metadata->imageAlt,
            'thumbnail' => true,
            'className' => 'w-md-50 w-xl-40 float-md-end mb-5 ms-md-5'
          ])
          : null,

        implode('', $this->children),

        $metadata->verses
          ? new BS_Section(
            ['className' => 'mt-element'],

            new BS_Heading2(null, 'Key verses'),

            new BS_Paragraph(
              ['id' => 'BlogEntryVerses'],

              implode(
                '; ',

                array_map(
                  function ($verse) {
                    return new BS_BibleLink(['to' => $verse]);
                  },

                  $metadata->verses
                )
              )
            ),
          )
          : null,
      ),

      $metadata->vimeo || $metadata->youtube
        ? new BS_Section(
          ['className' => 'mt-element'],

          new BS_Heading2(null, 'Related video'),

          new BS_Embed([
            'url' => $metadata->vimeo
              ? 'https://player.vimeo.com/video/' . $metadata->vimeo
              : 'https://www.youtube.com/embed/' . $metadata->youtube . '?rel=0',
            'title' => ($metadata->vimeo ? 'Vimeo' : 'YouTube') . ' video',
          ])
        )
        : null,

      new BS_PreviousNext([
        'previous' => $previous,
        'next' => $next,
        'className' => 'mt-element',
      ]),
    ];

    return parent::render();
  }
}
