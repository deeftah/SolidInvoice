<?php

/*
 * This file is part of the CSBill package.
 *
 * (c) Pierre du Plessis <info@customscripts.co.za>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CS\QuoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use CS\QuoteBundle\DataGrid\Grid;
use CS\MenuBundle\Annotation\Menu;
use CS\QuoteBundle\Form\Type\QuoteType;
use CS\QuoteBundle\Entity\Quote;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_quote_index")
     * @Template()
     * @Menu("CSQuoteBundle:Main:quotesindex", block="sidebar")
     */
    public function indexAction()
    {
        $grid = $this->get('grid')->create(new Grid);

        return array('grid' => $grid);
    }

    /**
     * Controller action to add a new quote
     *
     * @Route("/add", name="_quote_add")
     * @Template()
     */
    public function addAction()
    {
        $request = $this->getRequest();

        $quote = new Quote;

        $form = $this->createForm(new QuoteType(), $quote);

        if ($request->getMethod() === 'POST') {
            $form->bind($request);

            if ($form->isValid()) {

            }
        }

        return array('form' => $form->createView());
    }
}