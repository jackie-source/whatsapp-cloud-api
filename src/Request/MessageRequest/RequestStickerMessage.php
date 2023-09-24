<?php

namespace JackieSource\WhatsAppCloudApi\Request\MessageRequest;

use JackieSource\WhatsAppCloudApi\Request\MessageRequest;

final class RequestStickerMessage extends MessageRequest
{
    /**
     * {@inheritdoc}
     */
    public function body(): array
    {
        return [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            $this->message->type() => [
                $this->message->identifierType() => $this->message->identifierValue(),
            ],
        ];
    }
}
