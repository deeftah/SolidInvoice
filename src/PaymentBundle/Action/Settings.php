<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) 2013-2017 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\PaymentBundle\Action;

use SolidInvoice\CoreBundle\Templating\Template;
use Symfony\Component\HttpFoundation\Request;

final class Settings
{
    public function __invoke(Request $request)
    {
        return new Template('@SolidInvoicePayment/Settings/index.html.twig');
    }
}