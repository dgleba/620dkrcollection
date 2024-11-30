from django import forms
from .models import Article, Province, City

class ArticleForm(forms.ModelForm):
    province = forms.ModelChoiceField(queryset=Province.objects.all(), required=True)

    class Meta:
        model = Article
        fields = ['title', 'body', 'author', 'province', 'written_from']

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.fields['written_from'].queryset = City.objects.none()

        if 'province' in self.data:
            try:
                province_id = int(self.data.get('province'))
                self.fields['written_from'].queryset = City.objects.filter(province_id=province_id).order_by('name')
            except (ValueError, TypeError):
                pass
        elif self.instance.pk:
            self.fields['written_from'].queryset = self.instance.province.city_set.order_by('name')
