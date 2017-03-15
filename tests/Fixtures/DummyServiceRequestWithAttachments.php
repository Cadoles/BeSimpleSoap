<?php

namespace Fixtures;

use Fixtures\Attachment\AttachmentCollection;

class DummyServiceRequestWithAttachments
{
    /**
     * @var int $dummyAttribute
     */
    public $dummyAttribute;

    /**
     * @var bool $includeAttachments
     */
    public $includeAttachments;

    /**
     * @var AttachmentCollection $attachmentCollection
     */
    public $attachmentCollection;

    public function hasAttachments()
    {
        return $this->attachmentCollection !== null && $this->attachmentCollection->hasAttachments();
    }
}