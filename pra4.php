<?php 
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();
$collection->add('blog_show', new Route('/blog/{slug}', array(
    '_controller' => 'AcmeDemoBundle:Blog:show',
), array(
    '_method' => 'GET',
)));

$collection->add('blog_update', new Route('/blog/{slug}', array(
    '_controller' => 'AcmeDemoBundle:Blog:update',
), array(
    '_method' => 'PUT',
)));

$collection->add('blog_delete', new Route('/blog/{slug}', array(
    '_controller' => 'AcmeDemoBundle:Blog:delete',
), array(
    '_method' => 'DELETE',
)));

return $collection;
?>