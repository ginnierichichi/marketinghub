<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\MarketingUser
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser newQuery()
 * @method static \Illuminate\Database\Query\Builder|MarketingUser onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MarketingUser whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|MarketingUser withTrashed()
 * @method static \Illuminate\Database\Query\Builder|MarketingUser withoutTrashed()
 */
	class MarketingUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unicrimp
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Unicrimp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unicrimp newQuery()
 * @method static \Illuminate\Database\Query\Builder|Unicrimp onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Unicrimp query()
 * @method static \Illuminate\Database\Query\Builder|Unicrimp withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Unicrimp withoutTrashed()
 */
	class Unicrimp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
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
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

