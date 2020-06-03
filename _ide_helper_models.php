<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Presentation[] $presentations
 * @property-read int|null $presentations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

namespace App{
/**
 * App\Presentation
 *
 * @property int $id
 * @property int $creator
 * @property string $reference
 * @property string $content
 * @property string $state
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Presentation onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereCreator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Presentation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Presentation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Presentation withoutTrashed()
 */
	class Presentation extends \Eloquent {}
}

