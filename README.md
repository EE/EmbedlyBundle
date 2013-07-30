EmbedlyBundle
=============
Symfony Bundle for official Embedly PHP library.

[![Build Status](https://travis-ci.org/EE/EmbedlyBundle.png)](https://travis-ci.org/EE/EmbedlyBundle)

## Installation
Composer

    "ee/embedly-bundle":"dev-master"

AppKernel.php

    new EE\Bundle\EmbedlyBundle\EEEmbedlyBundle(),


## Usage

    $embedly = $this->container->get('embedly');
