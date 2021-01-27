<?php

namespace App\Controller\Admin;

use App\Entity\DescriptionImage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class DescriptionImageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DescriptionImage::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('name', 'Nom')
                ->setBasePath('uploads/projets/')
                ->setUploadDir('public/uploads/projets/')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
        ];
    }
}
