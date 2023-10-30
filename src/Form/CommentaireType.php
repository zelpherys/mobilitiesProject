<?php

namespace App\Form;

use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenuCommentaire')
            ->add('postConfirmer', HiddenType::class, [
                'data' => 0,
            ])
            ->add('postInfirmer', HiddenType::class, [
                'data' => 0,
            ]);
        //     ->add('postConfirmer')
        //     ->add('postInfirmer')
        //    ->add('idPost', HiddenType::class);
        //     ->add('idUtlisateur')
        // ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
