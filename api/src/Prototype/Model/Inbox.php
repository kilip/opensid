<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Inbox
{
    private $updatedindb;

    private $receivingdatetime;

    private $text;

    private $sendernumber;

    private $coding;

    private $udh;

    private $smscnumber;

    private $class;

    private $textdecoded;

    private $recipientid;

    private $processed;

    private $id;

    public function getUpdatedindb(): ?\DateTimeInterface
    {
        return $this->updatedindb;
    }

    public function setUpdatedindb(\DateTimeInterface $updatedindb): self
    {
        $this->updatedindb = $updatedindb;

        return $this;
    }

    public function getReceivingdatetime(): ?\DateTimeInterface
    {
        return $this->receivingdatetime;
    }

    public function setReceivingdatetime(\DateTimeInterface $receivingdatetime): self
    {
        $this->receivingdatetime = $receivingdatetime;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSendernumber(): ?string
    {
        return $this->sendernumber;
    }

    public function setSendernumber(string $sendernumber): self
    {
        $this->sendernumber = $sendernumber;

        return $this;
    }

    public function getCoding(): ?string
    {
        return $this->coding;
    }

    public function setCoding(string $coding): self
    {
        $this->coding = $coding;

        return $this;
    }

    public function getUdh(): ?string
    {
        return $this->udh;
    }

    public function setUdh(string $udh): self
    {
        $this->udh = $udh;

        return $this;
    }

    public function getSmscnumber(): ?string
    {
        return $this->smscnumber;
    }

    public function setSmscnumber(string $smscnumber): self
    {
        $this->smscnumber = $smscnumber;

        return $this;
    }

    public function getClass(): ?int
    {
        return $this->class;
    }

    public function setClass(int $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getTextdecoded(): ?string
    {
        return $this->textdecoded;
    }

    public function setTextdecoded(string $textdecoded): self
    {
        $this->textdecoded = $textdecoded;

        return $this;
    }

    public function getRecipientid(): ?string
    {
        return $this->recipientid;
    }

    public function setRecipientid(string $recipientid): self
    {
        $this->recipientid = $recipientid;

        return $this;
    }

    public function getProcessed(): ?string
    {
        return $this->processed;
    }

    public function setProcessed(string $processed): self
    {
        $this->processed = $processed;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
