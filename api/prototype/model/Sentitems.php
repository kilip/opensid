<?php

/*
 * This file is part of the OpenSID project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace OpenSID\Prototype\Model;

class Sentitems
{
    private $updatedindb;

    private $insertintodb;

    private $sendingdatetime;

    private $deliverydatetime;

    private $text;

    private $destinationnumber;

    private $coding;

    private $udh;

    private $smscnumber;

    private $class;

    private $textdecoded;

    private $senderid;

    private $status;

    private $statuserror;

    private $tpmr;

    private $relativevalidity;

    private $creatorid;

    private $id;

    private $sequenceposition;

    public function getUpdatedindb(): ?\DateTimeInterface
    {
        return $this->updatedindb;
    }

    public function setUpdatedindb(?\DateTimeInterface $updatedindb): self
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

    public function getDeliverydatetime(): ?\DateTimeInterface
    {
        return $this->deliverydatetime;
    }

    public function setDeliverydatetime(?\DateTimeInterface $deliverydatetime): self
    {
        $this->deliverydatetime = $deliverydatetime;

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

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
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

    public function getSenderid(): ?string
    {
        return $this->senderid;
    }

    public function setSenderid(string $senderid): self
    {
        $this->senderid = $senderid;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatuserror(): ?string
    {
        return $this->statuserror;
    }

    public function setStatuserror(string $statuserror): self
    {
        $this->statuserror = $statuserror;

        return $this;
    }

    public function getTpmr(): ?string
    {
        return $this->tpmr;
    }

    public function setTpmr(string $tpmr): self
    {
        $this->tpmr = $tpmr;

        return $this;
    }

    public function getRelativevalidity(): ?string
    {
        return $this->relativevalidity;
    }

    public function setRelativevalidity(string $relativevalidity): self
    {
        $this->relativevalidity = $relativevalidity;

        return $this;
    }

    public function getCreatorid(): ?string
    {
        return $this->creatorid;
    }

    public function setCreatorid(string $creatorid): self
    {
        $this->creatorid = $creatorid;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSequenceposition(): ?string
    {
        return $this->sequenceposition;
    }
}
