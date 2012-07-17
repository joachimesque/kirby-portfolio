<?php if(!defined('KIRBY')) exit ?>

# home blueprint

title: Home
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  featured: 
    label: Featured Image
    help:  The choices are none, random, file, any gallery URI (e.g. cat-1/project-b)
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large