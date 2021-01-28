<?php

namespace App\Controller\Admin;

use App\Entity\Work;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class WorkCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Work::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            AssociationField::new('categorie', 'Catégorie')
                ->setRequired(true),
            TextEditorField::new('description', 'Description')
                ->hideOnIndex(),
            UrlField::new('link', 'Lien vers le site')
                ->hideOnIndex(),
            DateTimeField::new('created_at', 'Créé le')->setFormat('dd/MM/yyyy'),
            ImageField::new('thumbnail', 'Vignette')
                ->setBasePath('uploads/projets/')
                ->setUploadDir('public/uploads/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            ImageField::new('featuredImage', 'À la une')
                ->setBasePath('uploads/projets/')
                ->setUploadDir('public/uploads/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                ->hideOnIndex(),
            ImageField::new('imageOne', 'Image n°1 du projet')
                ->setBasePath('uploads/projets/')
                ->setUploadDir('public/uploads/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                ->hideOnIndex(),
            ImageField::new('imageTwo', 'Image n°2 du projet')
                ->setBasePath('uploads/projets/')
                ->setUploadDir('public/uploads/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false)
                ->hideOnIndex(),
            BooleanField::new('isOnHome', 'À la une'),
        ];
    }
}
