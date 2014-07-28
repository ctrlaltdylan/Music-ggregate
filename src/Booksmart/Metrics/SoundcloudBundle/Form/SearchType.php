<?php

namespace Booksmart\Metrics\SoundcloudBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('query')
            ->add('Search', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Booksmart\Metrics\SoundcloudBundle\Entity\Search'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'booksmart_metrics_soundcloudbundle_search';
    }
}
