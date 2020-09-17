<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use Symfony\Component\HttpFoundation\Request;

class SupportController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
        ->add('Vardas', TextType::class, array('attr' => array('placeholder' => 'Jūsų vardas'),
                'constraints' => array(
                    new NotBlank(array("message" => "Įrašykite vardą")),
                )
            ))
        ->add('Pavarde', TextType::class, array('attr' => array('placeholder' => 'Jūsų pavardė'),
                'constraints' => array(
                    new NotBlank(array("message" => "Įrašykite vardą")),
                )
            ))
        ->add('Email', EmailType::class, array('attr' => array('placeholder' => 'Jūsų email address'),
                'constraints' => array(
                    new NotBlank(array("message" => "Įrašykite galiojantį email adresą")),
                    new Email(array("message" => "Jūsų email adresas nebegalioja")),
                )
            ))
        ->add('Komentaras', TextareaType::class, array('attr' => array('placeholder' => 'Jūsų tekstas'),
                'constraints' => array(
                    new NotBlank(array("message" => "Jūsų tekstas")),
                )
        ))
        ->add('recaptcha', EWZRecaptchaType::class, array(
            'attr' => array(
                'options' => array(
                    'theme' => 'light',
                    'type'  => 'image',
                    'size'  => 'normal',
                    'defer' => true,
                    'async' => true,
                )
            )
        ))
        // ->add('send', SubmitType::class )
        ->getForm()
        ;

        return $this->render('support/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

