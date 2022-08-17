<?php

namespace Pyz\Zed\Planet\Communication\Form;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Generated\Shared\Transfer\PlanetTransfer;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

class PlanetForm extends AbstractType {
    private const FIELD_NAME = 'name';
    private const FIELD_INTERESTING_FACT = 'interesting_fact';
    public const BUTTON_SUBMIT = "Submit";

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'planet';
    }
    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */


    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults([
            'data_class' => PlanetTransfer::class
        ]);
    }

    /* @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     * */

    public function buildForm(FormBuilderInterface $builder, array $options) : void
    {
        $this->addNameField($builder)->addInterestingFactField($builder)->addSubmitButton($builder);
    }
    /** @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @return $this
     */

    private function addNameField(FormBuilderInterface $builder): PlanetForm{
        $builder->add(static::FIELD_NAME, TextType::class, [
            'constraints' => [
                new Length([
                    'max'=> 50
                ]),
                new NotBlank()
            ]
        ]);
        return $this;
    }
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
    */

    private function addInterestingFactField(FormBuilderInterface $builder): PlanetForm{
        $builder->add(static::FIELD_INTERESTING_FACT, TextType::class,
            [
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'max'=> 255,
                        'min' => 15,
                        'minMessage' => 'Interesting fact minimum length is {{ limit }} current value is {{ value }}'
                    ])
                ]
            ]
        );
        // Trzecie pole to walidacja/label
        return $this;
    }

    private function addSubmitButton(FormBuilderInterface $builder): PlanetForm{
        $builder->add(static::BUTTON_SUBMIT, SubmitType::class);
        // Trzecie pole to walidacja/label
        return $this;
    }

}
