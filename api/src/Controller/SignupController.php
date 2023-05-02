<?php

namespace App\Controller;


use App\Repository\UserRepository;
use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use OpenApi\Annotations as OA;

header('Access-Control-Allow-Origin: *');
class SignupController extends AbstractController
{
    private Manager $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @OA\RequestBody(
     *     description="Signup",
     *     required=true,
     *     @OA\JsonContent(
     *         @OA\Property(
     *             property="email",
     *             type="string",
     *             example="correo@email.com",
     *         ),
     *         @OA\Property(
     *             property="password",
     *             type="string",
     *             example="1234",
     *         ),
     *     ),
     * )
     * @OA\Response(
     *     response=200,
     *     description="Signupresponse",
     *     @OA\JsonContent(
     *         type="object",
     *         @OA\Property(
     *             property="data",
     *             type="object",
     *             @OA\Property(
     *                 property="email",
     *                 type="string",
     *                 example="correo@email.com",
     *             ),
     *         ),
     *     ),
     * )
     * )
     * @OA\Tag(name="Signup")
     */
    #[Route('/signup', name: 'app_signup', methods: ['POST'])]
    public function signup(Request $request): Response
    {
        $email = $request->get('email');
        $response = new Response($email);

//        return $this->json(
//            $this->manager->createData(
//                new Item(
//                    true,
//                    fn ($success) => [
//                        'success' => $success
//                    ]
//                )
//            )
//        );
        return $response;
    }
}
