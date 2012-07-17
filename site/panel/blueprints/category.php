<?php if(!defined('KIRBY')) exit ?>

# category blueprint

title: Category
pages:
	template: gallery
files: false
fields:
  title: 
    label: Category name
    type:  text
  description: 
    label: Description
    type:  textarea
    size:  medium