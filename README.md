# scss-in-php README

VSCode에서 PHP 파일 내의 SCSS/SASS 구문에 대한 문법 강조 기능을 제공하는 확장 프로그램입니다.

## 기능

- PHP 파일 내의 SCSS/SASS 구문 강조
- SCSS/SASS 문법 자동 완성
- CSS 속성 및 값 제안

## 설치

1. VS Code 마켓플레이스에서 'scss-in-php' 검색
2. 설치 버튼 클릭
3. VS Code 재시작

## 사용법

PHP 파일 내에서 SCSS/SASS를 작성할 때 자동으로 문법 강조가 적용됩니다.

예시:
```php
<style lang="scss">
$primary-color: #333;

.container {
    background-color: $primary-color;

    &:hover {
        background-color: lighten($primary-color, 10%);
    }
}
</style>
```

## 릴리즈 노트

### 1.0.0
- 초기 릴리즈
- PHP 파일 내 SCSS/SASS 문법 강조 지원
- 기본적인 자동 완성 기능 추가

## 라이선스

MIT License
