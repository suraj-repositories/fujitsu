<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Form;
use App\Models\FormField;

class DynamicFormSeeder extends Seeder
{
    public function run(): void
    {
        $definitions = config('form_definitions');

        foreach ($definitions as $formKey => $formData) {
            $form = Form::updateOrCreate(
                ['name' => $formKey],
                ['title' => $formData['title']]
            );

            $order = 0;

            foreach ($formData['fields'] as $name => $fieldData) {
                FormField::updateOrCreate(
                    ['form_id' => $form->id, 'name' => $name],
                    [
                        'default_label' => $fieldData['label'],
                        'label' => $fieldData['label'],
                        'type' => $fieldData['type'],
                        'enabled' => true,
                        'order' => $order++,
                        'options' => $fieldData['options'] ?? null,
                        'validation_rules' => $this->getValidationRules($name, $fieldData),
                    ]
                );
            }
        }
    }

    private function getValidationRules(string $name, array $fieldData): array
    {
       return $fieldData['validation_rules'] ?? [];
    }
}
