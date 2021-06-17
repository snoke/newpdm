<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\Extension\Core\Type\TelType;
class FrontController extends AbstractController
{
    #[Route('/', name: 'front_index')]
    #[Route('/{route}', name: 'front')]
    /**  
     * @Route("/{route}", methods={"GET"})
     * @Route("/", methods={"GET"},name="front_index")
     */
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

   /**  
    * @Route("/", methods={"POST"},name="front_post")
    */
    public function post(ValidatorInterface $validator,Request $request): Response
    {
        

        $contact_phoneormail = preg_replace("/\s+/", "", $request->request->get('contact_phoneormail'));
        $contact_message = $request->request->get('contact_message');
        
        $emailConstraint = new Assert\Email();
        $phoneConstraint = new Assert\Regex([
            'pattern' => '^\+?[0-9]{3}-?[0-9]{6,12}$^',
        ]);

        // use the validator to validate the value
       $mailCheckErrors = $validator->validate(
            $contact_phoneormail,
            $emailConstraint
        );
        // use the validator to validate the value
        $phonecheckErrors = $validator->validate(
            $contact_phoneormail,
            $phoneConstraint
        );
        if (strlen($contact_phoneormail)<2 || (count($mailCheckErrors)>0 && count($phonecheckErrors)>0)) {
           
            return new JsonResponse([
                'result' => false,
                'response' => "Keine korrekte Email oder Telefonnummer eingegeben.",
            ]);
        }
        if (strlen($contact_message)<1) {
            return new JsonResponse([
                'result' => false,
                'response' => 'Bitte hinterlassen Sie eine Nachricht.',
            ]);
        }
        $message= '<'.$contact_phoneormail . '>:' . $contact_message;
        $from='stefan@stefan-sander.online';
        $to='stefan@stefan-sander.online';
        $response= shell_exec (
                'sendemail -f '. $from.' -t '.$to.' -u subject -m '. escapeshellarg($message) . ' -s '.$_ENV['SMTP_SERVER'].':587 -o tls=yes -xu '.$_ENV['SMTP_USER'].' -xp '.$_ENV['SMTP_USER_PASSWORD']
            );
            return new JsonResponse([
                'result' => true,
                'response' => $response,
            ]);
    }
}
