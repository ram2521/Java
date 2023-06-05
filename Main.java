package testpack;

public class Main {
    public static void main(String[] args) {
        // プレイヤーの目線
        // キャラクターの生成と操作

        // キャラクターインスタンスの生成
        Character character1 = new Character();
        Character character2 = new Character();
        Character character3 = new Character();

        // キャラクターの作成
        character1.createCharacter("勇者", 100);
        character2.createCharacter("魔法使い", 50);
        character3.createCharacter("戦士", 0);

        // キャラクターの情報を出力
        character1.output();
        character2.output();
        character3.output();

        // キャラクターの操作やバトルなどのプレイヤーの行動
    }
}

