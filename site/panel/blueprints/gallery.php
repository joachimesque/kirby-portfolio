<?php if(!defined('KIRBY')) exit ?>

# gallery blueprint

title: Gallery
pages: false
files: true
fields:
  title: 
    label: Title
    type:  text
  date: 
    label: Date
    type:   date
    format: dd.mm.yy
  slideshow:
    label: Slideshow
    type: checkbox
    default: on
  description: 
    label: Description
    type:  textarea
    size:  medium

filefields:
  title: 
    label: Title
    type:  text
  description:
    label: Description
    type:  textarea