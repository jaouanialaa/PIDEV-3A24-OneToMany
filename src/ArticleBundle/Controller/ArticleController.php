<?php

namespace ArticleBundle\Controller;

use ArticleBundle\Entity\Article;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class ArticleController extends Controller
{
    private function fetchArticle($id=null){
        if($id==null) {
            $article = $this->getDoctrine()
                ->getRepository(Article::class)
                ->findAll();
        }
        else{
            $article = $this->getDoctrine()
                ->getRepository(Article::class)
                ->find($id);
        }

        if($article){
            return $article;
        }
        else{
            return false;
        }

    }
    public function AjouterArticleAction(Request $request)
    {
        $article = new Article();

        $form = $this->createFormBuilder($article)
            ->add('titre',TextType::class)
            ->add('contenu', FroalaEditorType::class)
            ->add('categorie',EntityType::class,array(
                'class'=>"ArticleBundle\Entity\Categorie",
                "choice_label"=>"nom",
                "multiple"=>"true",
                'attr' => array('class' => 'js-example-basic-multiple')
            ))
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // but, the original `$task` variable has also been updated
            $article = $form->getData();
            /*$date="27-01-2018";
            $article->setDate($date);*/

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            //return $this->redirectToRoute('task_success');
        }
        // replace this example code with whatever you need
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render('ArticleBundle:Article:ajouter_article.html.twig', array(
            'form' => $form->createView(),
            "articles"=>$articles,
        ));
    }

    public function ModifierArticleAction()
    {
        return $this->render('ArticleBundle:Article:modifier_article.html.twig', array(
            // ...
        ));
    }

    public function SupprimerArticleAction($id)
    {
        $em = $this->getDoctrine();
        $article=$em->getRepository(Article::class)->find($id);
        if($article){
            $em=$em->getManager();
            $em->remove($article);
            $em->flush();
        }
        return $this->render('ArticleBundle:Article:supprimer_article.html.twig', array(
            // ...
        ));
    }

    public function AfficherArticlesAction()
    {
        return $this->render('ArticleBundle:Article:afficher_articles.html.twig', array(
            // ...
        ));
    }

}
