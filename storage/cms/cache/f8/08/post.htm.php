<?php 
class Cms5afa4a8fb9435688668300_481376d4314db906f2ad1696cae85c61Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
