<?php

namespace App\Controller\Admin;

use App\Entity\HeroHeader;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeroHeaderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HeroHeader::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('title'),
            TextField::new('subtitle'),
            TextareaField::new('content'),
            ImageField::new('image')
                ->setBasePath('uploads/headers/')
                ->setUploadDir('public/uploads/headers/')->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }
}
