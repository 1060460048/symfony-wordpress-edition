<?php


namespace Outlandish\SiteBundle\Controller;


use Outlandish\RoutemasterBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Outlandish\RoutemasterBundle\Annotation\Template;

class DefaultController extends BaseController {

	/**
	 * @Route("/{slugs}/", requirements={"slugs"="[\w-\/]+"})
	 * @Template
	 */
	public function defaultPostAction($slugs) {
		$slugBits = explode('/', trim($slugs, '/'));
		$post = $this->querySingle(array('name' => $slugBits[count($slugBits) - 1], 'post_type' => 'any'), true);

		return array('post' => $post);
	}

	/**
	 * @Route("/")
	 * @Template("OutlandishSiteBundle:Default:defaultPost.html.php")
	 */
	public function frontPageAction() {
		$post = $this->querySingle(array('page_id' => get_option('page_on_front')));
		return array('post' => $post);
	}

}