<?php

namespace FoF\Upload\Templates;

class VideoTemplate extends AbstractTemplate
{
    /**
     * @var string
     */
    protected $tag = 'video';

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return 'Video';
    }

    /**
     * {@inheritdoc}
     */
    public function description()
    {
        return 'MP4 Video Template';
    }

    /**
     * The xsl template to use with this tag.
     *
     * @return string
     */
    public function template()
    {
        return $this->getView('fof-upload.templates::video');
    }

    /**
     * The bbcode to be parsed.
     *
     * @return string
     */
    public function bbcode()
    {
        return '[upl-video uuid={IDENTIFIER} size={SIMPLETEXT2} url={URL}]{SIMPLETEXT1}[/upl-video]';
    }
}
