<?php

declare(strict_types=1);

/**
 * Derafu: Website - Base for Derafu's web sites.
 *
 * Copyright (c) 2025 Esteban De La Fuente Rubio / Derafu <https://www.derafu.dev>
 * Licensed under the MIT License.
 * See LICENSE file for more details.
 */

namespace App\Controller;

use Derafu\Form\Contract\Factory\FormFactoryInterface;
use Derafu\Renderer\Contract\RendererInterface;

class ContactController
{
    private array $formDefinition = [
        'schema' => [
            'type' => 'object',
            'properties' => [
                'name' => [
                    'type' => 'string',
                    'title' => 'Your Name',
                    'minLength' => 3,
                    'maxLength' => 100,
                ],
                'email' => [
                    'type' => 'string',
                    'title' => 'Your Email',
                    'format' => 'email',
                    'minLength' => 3,
                    'maxLength' => 80,
                ],
                'message' => [
                    'type' => 'string',
                    'title' => 'Your Message',
                    'minLength' => 10,
                    'maxLength' => 1000,
                ],
            ],
            'required' => ['name', 'email', 'message'],
        ],
    ];

    public function __construct(
        private readonly RendererInterface $renderer,
        private readonly FormFactoryInterface $formFactory,
    ) {
    }

    public function index()
    {
        $form = $this->formFactory->create($this->formDefinition);

        return $this->renderer->render('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
