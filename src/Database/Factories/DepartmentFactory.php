<?php
namespace Xpeedstudio\hr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xpeedstudio\hr\Models\Department;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    protected static $namespace = 'Xpeedstudio\\hr\\Database\\Factories\\';

    public function definition()
    {
        return [
<<<<<<< Updated upstream
            'name' => $this->faker->word,
=======
            'department_name' => $this->faker->word,
            'manager_id'        => null,
            'location_id' => $this->faker->randomElement(Location::pluck('_id')),
>>>>>>> Stashed changes
        ];
    }
    
}