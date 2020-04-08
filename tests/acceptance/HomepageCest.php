<?php declare(strict_types=1);

class HomepageCest
{
    public function seeHomepage(AcceptanceTester $I): void
    {
        // Arrange
        $expected = 'The Technikolor Framework';

        // Act
        $I->amOnPage('/');

        // Assert
        $I->seeResponseCodeIsSuccessful();
        $I->see($expected);
    }
}
