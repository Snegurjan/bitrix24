<?php

namespace LinkedinToBitrixImporter\InternalModels;

class LinkedinProfile
{

    protected string $name;
    protected string $surname;
    protected string $label;
    protected string $email;
    protected string $phone;
    protected string $website;
    protected string $summary;
    protected string $user;
    protected string $idVacancy;


    /** @var Work[] $works */
    protected array $works;

    /** @var Education[] $educations */
    protected array $educations;

    /** @var Skills[] $skills */
    protected array $skills;

    private array $userData;
    protected array $usersData;

    public function __construct(array $userArray)
    {
        $this->userData = $userArray['basics'];
        $this->setWorks($userArray['work']);
        $this->setEducation($userArray['education']);
        $this->setSkills($userArray['skills']);
        $this->setNewUserArray();
        $this->idVacancy = (string)$userArray['bitrix_user_id'];
    }


    protected function setNewUserArray(): self
    {
        $this->user = $this->userData['name'];
        $this->usersData = explode(' ', $this->user);
        $this->name = $this->usersData[0];
        $this->surname = $this->usersData[1];
        $this->name = $this->usersData[0] ?? '';


        $this->label = $this->userData['label'] ?? '';

        $this->email = isset($this->userData['email'], $this->userData['email'])
            ? $this->userData['email']
            : '';

        $this->summary = isset($this->userData['summary'], $this->userData['summary'])
            ? $this->userData['summary']
            : '';

        $this->phone = isset($this->userData['phone'], $this->userData['phone'])
            ? $this->userData['phone']
            : '';
        $this->website = isset($this->userData['website'], $this->userData['website'])
            ? $this->userData['website']
            : '';

        return $this;
    }

    protected function setWorks(array $works): void
    {

        foreach ($works as $work) {
            $this->works[] = new Work($work);
        }
    }

    protected function setEducation(array $educations): void
    {
        foreach ($educations as $education) {
            $this->educations[] = new Education($education);
        }
    }

    protected function setSkills(array $skills): void
    {

        foreach ($skills as $userSkills) {
            $this->skills[] = new Skills($userSkills);
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function getIdVacancy(): string
    {
        return $this->idVacancy;
    }

}