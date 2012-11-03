# Cloudinary for Nooku Server

Re-usable [Cloudinary](http://cloudinary.com/) component for Nooku Server.

Work in progress …

## Requirements
* Nooku Server 12.1
* PHP 5.3

## Re-usability
### Upload layout
<pre>
@service('com://admin/cloudinary.controller.image')
    ->view('image')
    ->layout('upload')
    ->table('foobar')
    ->row($foobar->id)
    ->display();
</pre>

### Thumbnails layout
<pre>
@service('com://admin/cloudinary.controller.image')
    ->view('images')
    ->layout('thumbnails')
    ->table('foobar')
    ->transformations('w_200')
    ->row($foobar->id)
    ->display();
</pre>

Check Cloudinary [resize dimensions](https://cloudinary.com/documentation/image_transformations#resize_dimensions) for more information on the 'dimensions' state.