<?php 
class Cms5afa482982822991088412_9ec80fa7bcd69ba1c61eb7ef52bbadfaClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
