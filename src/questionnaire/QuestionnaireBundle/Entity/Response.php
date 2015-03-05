<?php

namespace questionnaire\QuestionnaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Response
 *
 * @ORM\Table(name="`response`", indexes={@ORM\Index(name="IDX_C70D69AD50A89B2C", columns={"call_id"}), @ORM\Index(name="IDX_C70D69AD1E27F6BF", columns={"question_id"})})
 * @ORM\Entity
 */
class Response
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;

    /**
     * @var \Call
     *
     * @ORM\ManyToOne(targetEntity="Call")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="call_id", referencedColumnName="id")
     * })
     */
    private $call;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Response
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Response
     */
    public function setAttachement($attachement)
    {
        $this->attachement = $attachement;

        return $this;
    }

    /**
     * Get attachement
     *
     * @return string 
     */
    public function getAttachement()
    {
        return $this->attachement;
    }

    /**
     * Set question
     *
     * @param \questionnaire\QuestionnaireBundle\Entity\Question $question
     * @return Response
     */
    public function setQuestion(\questionnaire\QuestionnaireBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \questionnaire\QuestionnaireBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set call
     *
     * @param \questionnaire\QuestionnaireBundle\Entity\Call $call
     * @return Response
     */
    public function setCall(\questionnaire\QuestionnaireBundle\Entity\Call $call = null)
    {
        $this->call = $call;

        return $this;
    }

    /**
     * Get call
     *
     * @return \questionnaire\QuestionnaireBundle\Entity\Call 
     */
    public function getCall()
    {
        return $this->call;
    }
    
}
