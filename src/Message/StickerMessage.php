<?php

namespace JackieSource\WhatsAppCloudApi\Message;

use JackieSource\WhatsAppCloudApi\Message\Media\MediaID;

final class StickerMessage extends Message
{
    /**
    * {@inheritdoc}
    */
    protected string $type = 'sticker';

    /**
    * Document identifier: WhatsApp Media ID or any Internet public link document.
    *
    * You can get a WhatsApp Media ID uploading the document to the WhatsApp Cloud servers.
    */
    private MediaID $id;

    /**
    * {@inheritdoc}
    */
    public function __construct(string $to, MediaID $id)
    {
        $this->id = $id;

        parent::__construct($to);
    }

    public function identifierType(): string
    {
        return $this->id->type();
    }

    public function identifierValue(): string
    {
        return $this->id->value();
    }
}
