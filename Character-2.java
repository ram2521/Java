package testpack;

public class Character {
    String characterName;
    int experiencePoints;
    int level;

    // キャラクターの作成
    int createCharacter(String name, int initialExp) {
        characterName = name;
        experiencePoints = initialExp;
        return 15;
    }

    // レベルアップの処理
    void levelUp() {
        if (experiencePoints >= 100) {
            level = 10;
        } else if (experiencePoints >= 10) {
            level = 5;
        } else {
            level = 1;
        }
    }

    // キャラクター情報の出力
    void output() {
        System.out.println("キャラクター名: " + characterName);
        System.out.println("経験値: " + experiencePoints);
        System.out.println("レベル: " + level);
        System.out.println();
    }
}
