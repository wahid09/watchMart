<?php


Route::group(['namespace'=>'Frontend'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('/profile', 'MyProfile@index')->name('profile');
	Route::get('/products', 'ProductController@index')->name('product');
	Route::get('/about-us', 'AboutController@index')->name('about');
	Route::get('/contact-us', 'ContactController@index')->name('contact');

	Route::resource('product-details', 'ProductDetailsController');
	Route::resource('/cart', 'CartController');
	Route::resource('/wishlist', 'WishListController');
	Route::resource('/checkout', 'CheckoutController');
});

Route::group(['namespace'=>'Frontend\blog'], function(){
	Route::get('/blogs', 'BlogController@index')->name('blog.index');
	Route::get('/blog-details', 'BlogDetailsController@index')->name('blog-details.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
