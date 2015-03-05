<?php

namespace questionnaire\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditiondetails
 *
 * @ORM\Table(name="conditiondetails", indexes={@ORM\Index(name="FK_01", columns={"cid"}), @ORM\Index(name="FK_03", columns={"toQuest"}), @ORM\Index(name="IDX_1C8BEE655492AEDA", columns={"qid"})})
 * @ORM\Entity
 */
class Conditiondetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="valMin", type="string", length=255, nullable=false)
     */
    private $valmin;

    /**
     * @var string
     *
     * @ORM\Column(name="valMax", type="string", length=255, nullable=false)
     */
    private $valmax;

    /**
     * @var \Condition
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Condition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cid", referencedColumnName="ConditionId")
     * })
     */
    private $cid;

    /**
     * @var \Question
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="qid", referencedColumnName="id")
     * })
     */
    private $qid;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toQuest", referencedColumnName="id")
     * })
     */
    private $toquest;



    /**
     * Set valmin
     *
     * @param string $valmin
     * @return Conditiondetails
     */
    public function setValmin($valmin)
    {
        $this->valmin = $valmin;

        return $this;
    }

    /**
     * Get valmin
     *
     * @return string 
     */
    public function getValmin()
    {
        return $this->valmin;
    }

    /**
     * Set valmax
     *
     * @param string $valmax
     * @return Conditiondetails
     */
    public function setValmax($valmax)
    {
        $this->valmax = $valmax;

        return $this;
    }

    /**
     * Get valmax
     *
     * @return string 
     */
    public function getValmax()
    {
        return $this->valmax;
    }

    /**
     * Set cid
     *
     * @param \questionnaire\QuestionnaireBundle\Entity\Condition $cid
     * @return Conditiondetails
     */
    public function setCid(\questionnaire\QuestionnaireBundle\Entity\Condition $cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return \questionnaire\QuestionnaireBundle\Entity\Condition 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set qid
     *
     * @param \questionnaire\QuestionnaireBundle\Entity\Question $qid
     * @return Conditiondetails
     */
    public function setQid(\questionnaire\QuestionnaireBundle\Entity\Question $qid)
    {
        $this->qid = $qid;

        return $this;
    }

    /**
     * Get qid
     *
     * @return \questionnaire\QuestionnaireBundle\Entity\Question 
     */
    public function getQid()
    {
        return $this->qid;
    }

    /**
     * Set toquest
     *
     * @param \questionnaire\QuestionnaireBundle\Entity\Question $toquest
     * @return Conditiondetails
     */
    public function setToquest(\questionnaire\QuestionnaireBundle\Entity\Question $toquest = null)
    {
        $this->toquest = $toquest;

        return $this;
    }

    /**
     * Get toquest
     *
     * @return \questionnaire\QuestionnaireBundle\Entity\Question 
     */
    public function getToquest()
    {
        return $this->toquest;
    }
}
