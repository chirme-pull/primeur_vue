<?php

namespace App\Security;


use App\Controller\SecurityController;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\AuthenticatorInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;

class LoginFormAuthenticator extends AbstractAuthenticator
{
    private $UtilisateurRepository;
    private $urlGenerator;

    public function __construct(UtilisateurRepository $UtilisateurRepository, UrlGeneratorInterface $urlGenerator)
    {
        $this->UtilisateurRepository = $UtilisateurRepository;
        $this->urlGenerator = $urlGenerator;
 
    }

	


 /**
     * Does the authenticator support the given Request?
     *
     * If this returns false, the authenticator will be skipped.
     *
     * Returning null means authenticate() can be called lazily when accessing the token storage.
     */
    public function supports(Request $request): ?bool{

    	return $request->attributes->get('_route') === 'login' && $request->isMethod('POST');

    }

    /**
     * Create a passport for the current request.
     *
     * The passport contains the user, credentials and any additional information
     * that has to be checked by the Symfony Security system. For example, a login
     * form authenticator will probably return a passport containing the user, the
     * presented password and the CSRF token value.
     *
     * You may throw any AuthenticationException in this method in case of error (e.g.
     * a UsernameNotFoundException when the user cannot be found).
     *
     * @throws AuthenticationException
     */
    public function authenticate(Request $request): PassportInterface{
        


        $user = $this->UtilisateurRepository->findOneByEmail($request->request->get('email'));
        


        if (!$user) {

            //sauvegarde en session du mail erroné pour préremplir le champ email du form login
            $request->getSession()->set(SecurityController::LAST_EMAIL ,$request->request->get('email'));


            throw new CustomUserMessageAuthenticationException("invalid credentials");
            
        }

        return new Passport($user, new PasswordCredentials($request->request->get('password')), [

            new CsrfTokenBadge('login_form', $request->request->get('csrf_token')),

            //new PasswordUpgradeBadge($request->request->get('password'), $this->UtilisateurRepository)
        ]);
    }


    /**
     * Called when authentication executed and was successful!
     *
     * This should return the Response sent back to the user, like a
     * RedirectResponse to the last page they visited.
     *
     * If you return null, the current request will continue, and the user
     * will be authenticated. This makes sense, for example, with an API.
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response{
       
        //on supprime l'email préremplie s'il existe
        dd($request->getSession());
        if ($request->getSession()->get ) {
            $request->getSession->remove(SecurityController::LAST_EMAIL);
        }

        return new RedirectResponse($this->urlGenerator->generate('user_home'));
    }

    /**
     * Called when authentication executed, but failed (e.g. wrong username password).
     *
     * This should return the Response sent back to the user, like a
     * RedirectResponse to the login page or a 403 response.
     *
     * If you return null, the request will continue, but the user will
     * not be authenticated. This is probably not what you want to do.
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response{

        $type = "error";
        $request->getSession()->getFlashBag()->add($type, 'Identifiants invalide');

        return new RedirectResponse($this->urlGenerator->generate('login'));
        dd("failure");
    }
}
?>