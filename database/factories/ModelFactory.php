<?php

$factory->define(App\Models\Clinic::class, function (Faker\Generator $faker) {
    return [
        'number' => $faker->word,
        'name' => $faker->name,
        'device_count' => $faker->randomNumber(),
        'group_id' => $faker->randomNumber(),
        'date_opened' => $faker->date(),
        'quickbase_id' => $faker->randomNumber(),
        'quickbase_company' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\Location::class, function (Faker\Generator $faker) {
    return [
        'address' => $faker->word,
        'address2' => $faker->word,
        'city' => $faker->city,
        'state' => $faker->word,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'website' => $faker->word,
        'country' => $faker->country,
        'nickname' => $faker->word,
        'date_opened' => $faker->date(),
        'quickbase_id' => $faker->randomNumber(),
        'clinic_id' => function () {
             return factory(App\Models\Clinic::class)->create()->id;
        },
        'zipcodes_id' => $faker->randomNumber(),
        'zipcode_id' => function () {
             return factory(App\Models\Zipcode::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'photo' => $faker->word,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'uuid' => $faker->uuid,
        'about_me' => $faker->text,
        'website_id' => $faker->randomNumber(),
        'company' => $faker->company,
        'gender' => $faker->word,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->word,
        'work' => $faker->word,
        'other' => $faker->word,
        'is_published' => $faker->boolean,
        'is_active' => $faker->boolean,
        'dob' => $faker->date(),
        'skypeid' => $faker->word,
        'githubid' => $faker->word,
        'twitter_username' => $faker->word,
        'instagram_username' => $faker->word,
        'facebook_username' => $faker->word,
        'facebook_url' => $faker->word,
        'linked_in_url' => $faker->word,
        'google_plus_url' => $faker->word,
        'slug' => $faker->word,
        'display_name' => $faker->word,
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'password' => bcrypt($faker->password),
        'confirmation_code' => $faker->word,
        'confirmed' => $faker->boolean,
        'admin' => $faker->boolean,
        'profile_id' => $faker->randomNumber(),
        'quickbase_id' => $faker->randomNumber(),
        'quickbase_company' => $faker->randomNumber(),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Website::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'website' => $faker->word,
        'clinic_id' => function () {
             return factory(App\Models\Clinic::class)->create()->id;
        },
        'profile_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\Zipcode::class, function (Faker\Generator $faker) {
    return [
        'zip' => $faker->postcode,
        'location_id' => function () {
             return factory(App\Models\Location::class)->create()->id;
        },
        'clinic_id' => function () {
             return factory(App\Models\Clinic::class)->create()->id;
        },
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'username' => $faker->userName,
        'password' => bcrypt($faker->password),
        'confirmation_code' => $faker->word,
        'confirmed' => $faker->boolean,
        'admin' => $faker->boolean,
        'profile_id' => $faker->randomNumber(),
        'quickbase_id' => $faker->randomNumber(),
        'quickbase_company' => $faker->randomNumber(),
        'remember_token' => str_random(10),
        'deleted_at' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Models\Adsclient::class, function (Faker\Generator $faker) {
    return [
        'developer_token' => $faker->word,
        'client_customer_id' => $faker->word,
        'user_agent' => $faker->word,
        'client_id' => $faker->word,
        'client_secret' => $faker->word,
        'refresh_token' => $faker->word,
        'authorization_uri' => $faker->word,
        'redirect_uri' => $faker->word,
        'token_credential_uri' => $faker->word,
        'scope' => $faker->word,
        'website_id' => function () {
             return factory(App\Models\Website::class)->create()->id;
        },
        'user_id' => $faker->randomNumber(),
        'clinic_id' => function () {
             return factory(App\Models\Clinic::class)->create()->id;
        },
        'id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
    ];
});

$factory->define(App\Models\Analyticsclient::class, function (Faker\Generator $faker) {
    return [
        'view_id' => $faker->randomNumber(),
        'user_id' => function () {
             return factory(App\Models\User::class)->create()->id;
        },
        'clinic_id' => function () {
             return factory(App\Models\Clinic::class)->create()->id;
        },
        'website_id' => function () {
             return factory(App\Models\Website::class)->create()->id;
        },
        'view_url' => $faker->word,
    ];
});

