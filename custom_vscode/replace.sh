#!bin/bash

# Beautifier1.5をLaravelBladeに対応させるため整形するプログラムをハックしたものに置き換える。
# ベース https://gist.github.com/fzldn/a27973ff7e4c8e3738b0e06e525f7403
# 今回採用したもの https://gist.github.com/maliouris/f84b7f3dcb2a71455e693716e76ce302
# 置き換えた後VSCodeの再起動が必要。

SCRIPT_DIR=$(cd $(dirname $0); pwd)
# ハックしたファイル名
SCRIPT_NAME="beautifier_hacked.js"
SCRIPT_PATH=${SCRIPT_DIR}/${SCRIPT_NAME}

# VSCodeのBeautify1.5の当該ファイルパス
ORIGINAL_PATH=${HOME}/.vscode/extensions/hookyqr.beautify-1.5.0/node_modules/js-beautify/js/src/html/beautifier.js

# オリジナルファイルがハックファイルと違っていたらバックアップを取る
diff -s $ORIGINAL_PATH $SCRIPT_PATH > /dev/null 2>&1
if [ $? -eq 1 ]; then
  echo "オリジナルファイルのバックアップを作成しました"
  echo "[command] cp $ORIGINAL_PATH ${SCRIPT_DIR}/beautifier_org.js"
  cp $ORIGINAL_PATH ${SCRIPT_DIR}/beautifier_org.js
fi

# ファイル置き換え
echo "ファイルを置き換えました。"
echo "[command] cp $SCRIPT_PATH $ORIGINAL_PATH"
cp $SCRIPT_PATH $ORIGINAL_PATH