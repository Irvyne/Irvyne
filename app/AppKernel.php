<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\MarkItUpBundle\SonataMarkItUpBundle(),
            new Sonata\FormatterBundle\SonataFormatterBundle(),
            new Sonata\jQueryBundle\SonatajQueryBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),

            new FOS\UserBundle\FOSUserBundle(),

            new JMS\I18nRoutingBundle\JMSI18nRoutingBundle(),
            new JMS\TranslationBundle\JMSTranslationBundle(), // not required, but recommended for better extraction

            new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
            new A2lix\TranslationFormBundle\A2lixTranslationFormBundle(),

            new Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(), // or new Oneup\FlysystemBundle\OneupFlysystemBundle(),
            new Knp\Bundle\MarkdownBundle\KnpMarkdownBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            new Vich\UploaderBundle\VichUploaderBundle(),
            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),

            new Irvyne\BlogBundle\IrvyneBlogBundle(),
            new Irvyne\CKEditorBundle\IrvyneCKEditorBundle(),
            new Irvyne\UserBundle\IrvyneUserBundle(),
            new Irvyne\MainBundle\IrvyneMainBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();

            $bundles[] = new h4cc\AliceFixturesBundle\h4ccAliceFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

//    /**
//     * For Vagrant Optimization
//     *
//     * {@inheritdoc}
//     */
//    public function getCacheDir()
//    {
//        if (in_array($this->getEnvironment(), ['dev', 'test']))
//            return '/tmp/symfony/cache/'. $this->environment;
//        else
//            return parent::getCacheDir();
//    }
//
//    /**
//     * For Vagrant Optimization
//     *
//     * {@inheritdoc}
//     */
//    public function getLogDir()
//    {
//        if (in_array($this->getEnvironment(), ['dev', 'test']))
//            return '/tmp/symfony/log/'. $this->environment;
//        else
//            parent::getLogDir();
//    }
}
