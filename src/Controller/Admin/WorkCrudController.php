<?php

namespace App\Controller\Admin;

use App\Entity\Work;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
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
            AssociationField::new('categories', 'Catégorie(s)'),
            TextEditorField::new('description', 'Description'),
            UrlField::new('link', 'Lien vers le site'),
            DateTimeField::new('created_at', 'Créé le'),
            // ImageField::new('thumbnailImage', 'Vignette')
            //     ->setBasePath('uploads/projets/')
            //     ->setUploadDir('public/uploads/projets/')
            //     ->setUploadedFileNamePattern('[randomhash].[extension]'),
            // ImageField::new('featuredImage', 'À la une')
            //     ->setBasePath('uploads/projets/')
            //     ->setUploadDir('public/uploads/projets/')
            //     ->setUploadedFileNamePattern('[randomhash].[extension]'),
            // ImageField::new('descriptionImages', 'Image 1')
            //     ->setBasePath('uploads/projets/')
            //     ->setUploadDir('public/uploads/projets/')
            //     ->setUploadedFileNamePattern('[randomhash].[extension]'),
            AssociationField::new('descriptionImages', 'Images')



        ];
    }
}
