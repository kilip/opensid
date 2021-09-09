<?php

namespace OpenSID\Prototype\Model;

class Outbox
{
    private $updatedindb;

    private $insertintodb;

    private $sendingdatetime;

    private $sendbefore;

    private $sendafter;

    private $text;

    private $destinationnumber;

    private $coding;

    private $udh;

    private $class;

    private $textdecoded;

    private $multipart;

    private $relativevalidity;

    private $senderid;

    private $sendingtimeout;

    private $deliveryreport;

    private $creatorid;

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

    public function getInsertintodb(): ?\DateTimeInterface
    {
        return $this->insertintodb;
    }

    public function setInsertintodb(\DateTimeInterface $insertintodb): self
    {
        $this->insertintodb = $insertintodb;

        return $this;
    }

    public function getSendingdatetime(): ?\DateTimeInterface
    {
        return $this->sendingdatetime;
    }

    public function setSendingdatetime(\DateTimeInterface $sendingdatetime): self
    {
        $this->sendingdatetime = $sendingdatetime;

        return $this;
    }

    public function getSendbefore(): ?\DateTimeInterface
    {
        return $this->sendbefore;
    }

    public function setSendbefore(\DateTimeInterface $sendbefore): self
    {
        $this->sendbefore = $sendbefore;

        return $this;
    }

    public function getSendafter(): ?\DateTimeInterface
    {
        return $this->sendafter;
    }

    public function setSendafter(\DateTimeInterface $sendafter): self
    {
        $this->sendafter = $sendafter;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getDestinationnumber(): ?string
    {
        return $this->destinationnumber;
    }

    public function setDestinationnumber(string $destinationnumber): self
    {
        $this->destinationnumber = $destinationnumber;

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

    public function setUdh(?string $udh): self
    {
        $this->udh = $udh;

        return $this;
    }

    public function getClass(): ?int
    {
        return $this->class;
    }

    public function setClass(?int $class): self
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

    public function getMultipart(): ?string
    {
        return $this->multipart;
    }

    public function setMultipart(?string $multipart): self
    {
        $this->multipart = $multipart;

        return $this;
    }

    public function getRelativevalidity(): ?int
    {
        return $this->relativevalidity;
    }

    public function setRelativevalidity(?int $relativevalidity): self
    {
        $this->relativevalidity = $relativevalidity;

        return $this;
    }

    public function getSenderid(): ?string
    {
        return $this->senderid;
    }

    public function setSenderid(?string $senderid): self
    {
        $this->senderid = $senderid;

        return $this;
    }

    public function getSendingtimeout(): ?\DateTimeInterface
    {
        return $this->sendingtimeout;
    }

    public function setSendingtimeout(?\DateTimeInterface $sendingtimeout): self
    {
        $this->sendingtimeout = $sendingtimeout;

        return $this;
    }

    public function getDeliveryreport(): ?string
    {
        return $this->deliveryreport;
    }

    public function setDeliveryreport(?string $deliveryreport): self
    {
        $this->deliveryreport = $deliveryreport;

        return $this;
    }

    public function getCreatorid(): ?string
    {
        return $this->creatorid;
    }

    public function setCreatorid(?string $creatorid): self
    {
        $this->creatorid = $creatorid;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
